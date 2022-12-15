<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'John Doe',
            'email' => 'john.doe@email.com',
            'password' => bcrypt('password'),
            'gender' => 'male',
            'dob' => '1990-01-01',
            'country' => 'United States',
        ]);
        User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@email.com',
            'password' => bcrypt('password'),
            'gender' => 'female',
            'dob' => '1990-01-01',
            'country' => 'United States',

        ]);
        User::create([
            'name' => 'John Smith',
            'email' => 'john.smith@email.com',
            'password' => bcrypt('password'),
            'gender' => 'male',
            'dob' => '1990-01-01',
            'country' => 'United States',

        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'gender' => 'male',
            'dob' => '1990-01-01',
            'country' => 'United States',
            'role' => 'admin'
        ]);
    }
}
