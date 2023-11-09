<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'John Doe',
            'email' => 'jean@exemple.com',
            'password' => Hash::make('password123'),
            'role_id' => '2',
        ]);
        User::create([
            'name' => 'Leon Toto',
            'email' => 'Leon@exemple.com',
            'password' => Hash::make('password123'),
            'role_id' => '3',
        ]);
        User::create([
            'name' => 'Cecile ado',
            'email' => 'ado@exemple.com',
            'password' => Hash::make('password123'),
            'role_id' => '4',
        ]);
    }
}
