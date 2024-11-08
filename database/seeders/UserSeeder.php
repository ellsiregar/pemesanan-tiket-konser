<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'admin1',
                'email' => 'admin123@example.com',
                'password' => bcrypt('admin123'),
                'name' => 'admin1',
                'role' => 'admin',
            ],

            [
                'username' => 'joko',
                'email' => 'joko@example.com',
                'password' => bcrypt('joko123'),
                'name' => 'joko',
                'role' => 'user',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
