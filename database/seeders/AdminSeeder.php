<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'nama' => 'Admin gungde',
            'email' => 'admingungde@email.com',
            'password' => Hash::make('admin123'), 
        ]);
    }
}
