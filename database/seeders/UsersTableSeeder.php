<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users') ->insert([
            'first_name' => 'Truong',
            'last_name' => 'Kiet',
            'email' => 'trikiet@khgc.com',
            'password' => Hash::make('Kiet2003@'),
            // 'address' => 'Hcm City', //add after done task
            'status' => '0',
            'role' => 'user',
        ]);
    }
}
