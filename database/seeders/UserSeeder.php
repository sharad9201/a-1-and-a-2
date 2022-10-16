<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Sharad',
            'email' => 'test@gmail.com',
            'age' => 22,
            'bio' => 'I am a laravel developer.',
            'password' => Hash::make('test@123'),
        ]);
    }
}
