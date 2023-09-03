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
     */
    public function run(): void
    {

        User::factory(25)->create();
        User::factory()->create([
            'name' => 'Dodi Herryanto',
            'email' => 'superuser@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'phone' => '6285208713184',
            'bio' => 'super user bio',
        ]);
        User::factory()->create([
            'name' => 'Syifa Qurrotun Aini',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'role' => 'superadmin',
            'phone' => '6285208713186',
            'bio' => 'super admin bio',
        ]);
    }
}
