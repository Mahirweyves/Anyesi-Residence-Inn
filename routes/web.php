<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\RoomController;

Route::get('/', function () {
    return view('room.home');
});

Route::get('/upload_room', [AdminController::class, 'upload'])->name('room.upload_room');
Route::get('/room-images/{id}',[AdminController::class,'images'])->name('room.images');
Route::get('/', [HomeController::class, 'index'])->name('room.home');
Route::get('/rooms/{id}/edit', [AdminController::class, 'editRoom'])->name('rooms.edit');
Route::put('/rooms/{id}', [AdminController::class, 'updateRoom'])->name('rooms.update');
Route::delete('/rooms/{id}', [AdminController::class, 'destroyRoom'])->name('rooms.destroy');
Route::delete('/images/{id}', [AdminController::class, 'destroyImage'])->name('images.destroy');
Route::get('/home',[HomeController::class,'redirect']);

Route::get('/rooms', function () {
    return view('room.rooms');
});

Route::get('/contact', function () {
    return view('room.contact');
});

Route::get('/reservation', function () {
    return view('room.reservation');
});

//Showing bookings and rooms in Admin
Route::get('/bookings', [AdminController::class, 'showBookings'])->name('bookings');
Route::get('/All_rooms', [AdminController::class, 'rooms'])->name('All_rooms');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/room/{id}/confirm', [HomeController::class, 'confirmBooking'])->name('room.confirm');
Route::post('/room/{id}/book', [HomeController::class, 'bookRoom'])->name('room.book');

Route::get('/room/{id}', [HomeController::class, 'showRoom'])->name('room.show');

//Contact routing
Route::get('/room/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/room/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contacts', [AdminController::class, 'contacts'])->name('contacts');

// Room routing
Route::get('/add_room',[AdminController::class,'newroom']);
Route::post('/upload_room',[AdminController::class,'upload']);

// All navbar page link routing
// Route::get('/about',[HomeController::class,'about']);
Route::get('/booking',[HomeController::class,'booking']);
Route::get('/rooms',[HomeController::class,'rooms']);

