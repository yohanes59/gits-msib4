<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'Admin'
            ],
            [
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user12345'),
                'role' => 'User'
            ],
        ];

        foreach ($data as $value) {
            User::insert([
                'username' => $value['username'],
                'email' => $value['email'],
                'password' => $value['password'],
                'role' => $value['role'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
