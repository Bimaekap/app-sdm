<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'bimaekaputra',
            'role' => 'superadmin',
            'email' => 'bimaeka2000@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
