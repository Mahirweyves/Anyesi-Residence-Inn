<?php

// app/Mail/BookingNotification.php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $nights;
    public $totalAmount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
        $checkin = new \DateTime($booking->checkin);
        $checkout = new \DateTime($booking->checkout);
        $this->nights = $checkout->diff($checkin)->days;
        $this->totalAmount = $this->booking->room->price * $this->nights;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.booking_notification')
                    ->with([
                        'booking' => $this->booking,
                        'nights' => $this->nights,
                        'totalAmount' => $this->totalAmount,
                    ]);
    }
}
