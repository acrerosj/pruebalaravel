<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Andres', 'email'=>'acrerosj@canariaseducacion.es', 'password'=>'123'],
            ['name' => 'pepe', 'email'=>'pepe@pepe.es', 'password'=>'123'],
            ['name' => 'marta', 'email'=>'marta@marta.es', 'password'=>'123'],
        ];

        User::insert($users);
    }
}
