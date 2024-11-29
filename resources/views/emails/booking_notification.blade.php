<!DOCTYPE html>
<html>
    <head>
        <title>New Booking Notification</title>
    </head>
    <!-- <body>
        <h1>New Booking Notification</h1>
        <p>Room: {{ $booking->room->name }}</p>
        <p>Name: {{ $booking->name }}</p>
        <p>Email: {{ $booking->email }}</p>
        <p>Phone: {{ $booking->phone }}</p>
        <p>Address: {{ $booking->address }}</p>
        <p>Check-in Date: {{ $booking->checkin }}</p>
        <p>Check-out Date: {{ $booking->checkout }}</p>
        <p>Total Amount: {{ number_format($booking->room->price * $booking->nights, 2) }}</p>
    </body> -->
    <body>
    <h1>New Booking Notification</h1>
    <strong>Room Booked: </strong>{{ $booking->room->name }}<br>
    <strong>Name: </strong> {{ $booking->name }}<br>
    <strong>Email: </strong> {{ $booking->email }}<br>
    <strong>Phone: </strong> {{ $booking->phone }}<br>
    <strong>Address: </strong> {{ $booking->address }}<br>
    <strong>Check-In Date: </strong> {{ $booking->checkin }}<br>
    <strong>Check-Out Date: </strong> {{ $booking->checkout }}<br>
    <strong>Number of Nights: </strong> {{ $nights }}<br>
    <strong>Total Amount: </strong> {{ number_format($totalAmount) }} RWF<br><br>

    Thank you
</body>
</html>
