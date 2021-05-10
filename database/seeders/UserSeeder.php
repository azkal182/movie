<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
                'role' => 1
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => Hash::make('user'),
                'role' => 0
            ],
        ]);
    }
}
