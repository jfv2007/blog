<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Jesus Feria Villalobos',
            'email'=>'jfv6@hotmail.com',
            'password'=>bcrypt('12345678')
        ]);

        User::factory(9)->Create();
    }
}
