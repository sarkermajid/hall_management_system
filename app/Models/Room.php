<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';

    protected $fillable = [
        'hall_id',
        'room_number',
        'total_seats',
        'available_seats',
    ];

    public function Halls()
    {
        return $this->belongsTo(Hall::class, 'hall_id', 'id');
    }
}
