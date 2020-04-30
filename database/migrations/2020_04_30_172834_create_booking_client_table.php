<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingClientTable extends Migration
{
    
    public function up()
    {
        Schema::create('booking_client', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id');
            $table->foreignId('client_id');
            $table->timestamps();

            $table->foreign('booking_id')->references('id')->on('bookings');
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_client');
    }
}
