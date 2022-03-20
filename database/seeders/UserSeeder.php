<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'user test',
            'email' => 'test@gmail.com',
            'password' => 'password',
            'number_phone' => '74115408',
            'cedula_identidad' => '10467159',
            'date_birt' => '10/09/22',
            'city_code' => '12345',
            'role' => 'admin'
        ]);

        User::factory(50)->create();
    }
}
