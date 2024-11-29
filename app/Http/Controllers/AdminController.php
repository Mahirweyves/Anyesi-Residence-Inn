<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Room;
use App\Models\Image;
use App\Models\Booking;
use App\Models\Contact;
use Notification;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function newroom()
    {
        $rooms = Room::all(); // retrieve all rooms
        // Session::put('rooms', $rooms);

        return view('admin.add_room');
    }

    public function upload(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required|string|max:255',
            'capacity' => 'required|numeric|max:999999999999', // Adjust the max value as needed
            'price' => 'required|numeric|max:999999999999999.99', // Adjust the max value as needed
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $new_room = Room::create($data);

        if($request->has('images')){
            foreach($request->file('images') as $image){
                $imageName = $data['name'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('uploaded_images'),$imageName);
                
                Image::create([
                    'room_id' => $new_room->id,
                    'image' => $imageName
                ]);
            }
        }
        return redirect()->back()->with('success','Added');
    }

    public function rooms()
    {
        // Get all rooms with pagination, ordered by ascending order
        $rooms = Room::orderBy('created_at', 'asc')->paginate(8);
        return view('admin.All_rooms', compact('rooms'));
    }

    public function editRoom($id)
    {
        // $room = Room::findOrFail($id);
        $room = Room::with('images')->findOrFail($id); //Same as the above commented line code but this one takes rooms-images
        return view('admin.edit-room', compact('room'));
    }

    public function updateRoom(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|string|max:255',
            'capacity' => 'required|numeric|max:999999999999', // Adjust the max value as needed
            'price' => 'required|numeric|max:999999999999999.99', // Adjust the max value as needed
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $room = Room::findOrFail($id);
        $room->name = $request->input('name');
        $room->description = $request->input('description');
        $room->capacity = $request->input('capacity');
        $room->price = $request->input('price');
        $room->save();

        if ($request->has('images')) {
            // Delete existing images
            foreach ($room->images as $image) {
                if (file_exists(public_path('uploaded_images/' . $image->image))) {
                    unlink(public_path('uploaded_images/' . $image->image));
                }
                $image->delete();
            }

            // Upload new images
            foreach ($request->file('images') as $image) {
                $imageName = $room->name . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
                $image->move(public_path('uploaded_images'), $imageName);

                Image::create([
                    'room_id' => $room->id,
                    'image' => $imageName
                ]);
            }
        }

        return redirect()->back()->with('success', 'Room updated successfully!');
    }   

    public function destroyRoom($id)
    {
        $room = Room::findOrFail($id);

        // Delete images
        foreach ($room->images as $image) {
            if (file_exists(public_path('uploaded_images/' . $image->image))) {
                unlink(public_path('uploaded_images/' . $image->image));
            }
            $image->delete();
        }

        $room->delete();

        return redirect()->back()->with('success', 'Room deleted successfully!');
    }

    public function destroyImage($id)
    {
        $image = Image::findOrFail($id);
        if (file_exists(public_path('uploaded_images/' . $image->image))) {
            unlink(public_path('uploaded_images/' . $image->image));
        }
        $image->delete();
        return response()->json(['success' => 'Image deleted successfully!']);
    }

    public function showBookings()
    {
        // This is the same as the one below unless we addded pagination instead of get() all
        // $bookings = Booking::with('room')->get();
        $bookings = Booking::with('room')->orderBy('created_at', 'desc')->paginate(8);
        return view('admin.bookings', compact('bookings'));
    }

    public function contacts()
    {
        // Get all contact messages with pagination, ordered by ascending order
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(8);
        return view('admin.contacts', compact('contacts'));
    }

    public function images($id)
    {
        $room = Room::find($id);
        if(!$room) abort(404);
        $images = $room->images;
        return view('admin.images',compact('room','images'));
    }

    // public function All_rooms()
    // {
    //     $data=Room::orderBy('id', 'asc')->paginate(6);
         
    //     return view('admin.All_rooms',compact('data'));
    // }

    // public function message()
    // {
    //     $data=contact::orderBy('id', 'asc')->paginate(10);

    //     return view('admin.message',compact('data'));
    // }

    // public function addview()
    // {
    //     return view('admin.add_reservation');
    // }

    // public function showreservation()
    // {
    //     if(Auth::id())
    //     {
    //         if(Auth::user()->usertype==1)
    //         {
    //             $data=reservation::orderBy('id', 'asc')->paginate(6);

    //             return view('admin.showreservation',compact('data'));
    //         }
    //         else
    //         {
    //             return redirect()->back();
    //         }
    //     }
    //     else
    //     {
    //        return redirect('login');
    //     }
    // }

    // public function adduser()
    // {
    //     return view('admin.adduser');
    // }

    // public function register(Request $request)
    // {
    //     $data=new user;
    //     $data->name=$request->name;
    //     $data->email=$request->email;
    //     $data->phone_number=$request->phone;
    //     $data->password=$request->password;

    //     $data->save();
    //     return redirect()->back();
    // }

    // public function approved($id)
    // {
    //     $data=reservation::find($id);
    //     $data->status='Approved';
    //     $data->save();
    //     return redirect()->back();
    // }

    // public function rejected($id)
    // {
    //     $data=reservation::find($id);
    //     $data->status='Rejected';
    //     $data->save();
    //     return redirect()->back();
    // }

    // public function emailview($id)
    // {
    //     $data=reservation::find($id);

    //     return view('admin.email_view',compact('data'));
    // }

    // public function sendemail(Request $request,$id)
    // {
    //     $data = reservation::find($id);
    //     $details=
    //     [
    //         'greeting' => $request->greeting,
    //         'body' => $request->body,
    //         'actiontext' => $request->actiontext,
    //         'actionurl' => $request->actionurl,
    //         'endpart' => $request->endpart
    //     ];

    //     Notification::send($data,new SendEmailNotification($details));

    //     return redirect()->back()->with('message','Email is sent successfully to {{($users->name)}}!');
    // }

}
