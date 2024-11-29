<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Image;
use App\Models\Booking;
use App\Mail\BookingNotification;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    // public function redirect() {
    //     if(Auth::id()) {
            
    //         if(Auth::user()->usertype=='0') 
    //         {
    //             return View('room.home');
    //         }

    //         else 
    //             return view('admin.home');
    //     }

    //     else {
    //         return redirect()->back();
    //     }
    // }
    public function redirect() {
        $user = Auth::user(); // Fetch the user

        if ($user) { // Check if user is authenticated
            if ($user->usertype == '0') {
                return view('room.home');
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->route('login'); // Redirect to login page if not authenticated
        }
    }

    
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
            // $rooms = Session::get('rooms',[]);
            // $rooms = Room::all();
            $rooms = Room::with('images')->get();
            return view('room.home', ['rooms' => $rooms]);// compact($rooms)
        }
    }

    public function showRoom($id)
    {
        // Fetch the room by id
        // $room = Room::findOrFail($id);
        $room = Room::with('images')->findOrFail($id);
        $relatedRooms = Room::where('id', '!=', $id)->inRandomOrder()->take(5)->get();
        return view('room.show', compact('room', 'relatedRooms'));
    }




    public function confirmBooking(Request $request, $id)
{
    // Validate check-in and check-out dates
    $request->validate([
        'checkin' => 'required|date',
        'checkout' => 'required|date|after:checkin',
    ]);

    $room = Room::findOrFail($id);
    $checkin = $request->input('checkin');
    $checkout = $request->input('checkout');

    // Fetch the day of the week
    $checkinDay = date('l', strtotime($checkin));
    $checkoutDay = date('l', strtotime($checkout));

    // Calculate number of nights
    $checkinDate = new \DateTime($checkin);
    $checkoutDate = new \DateTime($checkout);
    $interval = $checkinDate->diff($checkoutDate);
    $nights = $interval->days;

    // Calculate total amount
    $totalAmount = $nights * $room->price;

    // Format prices with commas
    $formattedPrice = number_format($room->price, 2);
    $formattedTotalAmount = number_format($totalAmount);

    return view('room.confirm', compact('room', 'checkin', 'checkout', 'nights', 'checkinDay', 'checkoutDay', 'formattedPrice', 'formattedTotalAmount'));
}

// Handle the final booking submission
public function bookRoom(Request $request, $id)
{
    $request->validate([
        'checkin' => 'required|date',
        'checkout' => 'required|date|after:checkin',
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'address' => 'required|string|max:255',
        'phone' => 'required|numeric',
    ]);

    $room = Room::findOrFail($id);

    $checkin = new \DateTime($request->input('checkin'));
    $checkout = new \DateTime($request->input('checkout'));
    $nights = $checkout->diff($checkin)->days;
    $price_per_night = $room->price;

    // Debugging
    \Log::info('Room Price: ' . $price_per_night);
    \Log::info('Number of Nights: ' . $nights);
    $total_amount = $price_per_night * $nights;

    // Debugging
    \Log::info('Total Amount: ' . $total_amount);

    $booking = new Booking();
    $booking->room_id = $room->id;
    $booking->name = $request->input('name');
    $booking->email = $request->input('email');
    $booking->address = $request->input('address');
    $booking->phone = $request->input('phone');
    $booking->checkin = $request->input('checkin');
    $booking->checkout = $request->input('checkout');
    // $booking->total_amount = $request->input('totalAmount');
    $booking->save();

    // Calculate the total amount again (to be displayed in the success message)
    $checkinDate = new \DateTime($request->input('checkin'));
    $checkoutDate = new \DateTime($request->input('checkout'));
    $interval = $checkinDate->diff($checkoutDate);
    $nights = $interval->days;
    $totalAmount = $nights * $room->price;

    // Send email to admin
    Mail::to('yvesmahirwe1@gmail.com')->send(new BookingNotification($booking));

    return redirect()->route('room.show', $room->id)->with([
        'success' => 'Thanks for booking with us, Our team will get back to you within few hours.',
        'totalAmount' => $totalAmount 
    ]);
}

    
    

    public function showBookingConfirmation(Request $request)
    {
        $data = $request->all();
        return view('booking.confirmation', compact('data'));
    }

    public function storeBooking(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'name' => 'required|max:30',
            'email' => 'required|email|max:50',
            'phone' => 'required|numeric',
            'checkin' => 'required|date|after:today',
            'checkout' => 'required|date|after:checkin',
            'address' => 'required',
            // 'checkout' => 'required|date|after:checkin|before:tomorrow',
        ]);

        Booking::create($request->all());

        // return redirect()->route('booking.success'); // Redirect to a success page or wherever you want
        return redirect()->back()->with('message', 'Thanks for booking with us...  Our team will get back to you within 24 hours.');
    }
    
    public function about()
    {
        return view('room.about');
    }

    function rooms()
    {
        $rooms = Room::all();
        return view('room.rooms', compact('rooms'));
    }

    function reservation()
    {
        return view('room.reservation');
    }

    function contact()
    {
        return view('room.contact');
    }
}
