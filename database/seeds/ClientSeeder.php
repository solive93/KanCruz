<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    
    public function run()
    {
        App\Client::create([
            'name' => 'Sergi',
            'dni' => '994390k',
            'email' => 'sergi@gmail.com',
            'phone' => '03490',
        ]);
        
        App\Client::create([
            'name' => 'Bruna',
            'dni' => '994390k',
            'email' => 'bruna@gmail.com',
            'phone' => '949304'
        ]);
            
        App\Client::create([

            'name' => 'Alejandro',
            'dni' => '994390k',
            'email' => 'alejandro@gmail.com',
            'phone' => '09340',
         
        ]);
    }
}
