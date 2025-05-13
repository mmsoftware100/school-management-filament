<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'id' => 1,
                'name' => "Admin Mg Mg",
                'email' => 'admin@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 1, // admin
            ],
            [
                'id' => 2,
                'name' => "Teacher Aye Aye",
                'email' => 'teacher@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 2, // teacher
            ],
            [
                'id' => 3,
                'name' => "Student Ko Ko",
                'email' => 'student@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 3, // student
            ],
        ]);
    }
}
