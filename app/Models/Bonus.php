<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    use HasFactory;

    protected $fillable = ['boarding_house_id', 'name', 'image', 'description'];

    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class);
    }
}
