<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = ['id', 'timestamps'];


    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }


}