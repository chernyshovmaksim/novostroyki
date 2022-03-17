<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            'name' => 'Max',
            'email' => 'chernyshovmaksim56@gmail.com',
            'password' => Hash::make('12345678'),
            'refer' => uniqid('', true),
        ]);
    }
}
