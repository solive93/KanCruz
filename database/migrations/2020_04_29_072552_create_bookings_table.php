<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    // relacion con user (email, telefono, name) + relacion con habitación.
    public function up() 
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_dni');
            $table->string('client_email');
            $table->string('client_phone');
            $table->date('checkin');
            $table->date('checkout');
            $table->boolean('breakfast')->default(0);
            $table->boolean('pets')->default(0);
            //$table->integer('pets_number')->nullable();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
