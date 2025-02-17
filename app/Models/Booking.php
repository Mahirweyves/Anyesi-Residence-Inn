<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['room_id', 'name', 'email', 'address', 'phone', 'checkin', 'checkout'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
