<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhammad Ediefanto',
            'username' => 'ediefanto',
            'email' => 'ediefanto778@gmail.com',
            'password' => Hash::make('admin')
        ]);
        // Post::factory(10)->create();
    }
}
