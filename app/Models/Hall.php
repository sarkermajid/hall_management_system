<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    protected $table = 'halls';
    protected $fillable = [
        'name',
        'total_capacity',
        'gender',
    ];

    public function Rooms()
    {
        return $this->hasMany(Room::class, 'hall_id', 'id');
    }

}
