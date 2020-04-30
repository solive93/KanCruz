<?php

use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Booking::create([
            'client_name' => 'Bruna',
            'client_lastname' => 'Gomes',
            'client_document' => 'yc03940e',
            'client_email' => 'brunagom3s@gmail.com',
            'client_phone' => '943849302',
            'checkin' => '2020/05/30',
            'checkout' => '2020/05/30',
            'breakfast'=> '0',
            'pets'=> '0'
        ]);


        App\Booking::create([
            'client_name' => 'Sergi',
            'client_lastname' => 'Oliveres Amor',
            'client_document' => '994390k',
            'client_email' => 'sergi@gmail.com',
            'client_phone' => '03490',
            'checkin' => '2020/05/03',
            'checkout' => '2020/05/16',
            'breakfast'=> '0',
            'pets'=> '0'
        ]);
    }
}
