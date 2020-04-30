<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'dni'];

    public function bookings()
    {
      return $this->belongsToMany(Booking::class);
    }
}
