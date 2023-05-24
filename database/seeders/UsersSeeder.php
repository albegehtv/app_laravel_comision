<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Carlos Ferreira',
            'email'=> 'carlos@espezializati.com.br',
            'password' => bcrypt('123456789'),

        ]);
     }
}
