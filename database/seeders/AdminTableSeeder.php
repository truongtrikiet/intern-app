<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users') ->insert([
            'first_name' => 'Admin',
            'last_name' => 'Super',
            'email' => 'superadmin@khgc.com',
            'password' => Hash::make('Abcd@1234'),
            'address' => 'KHGC, Hochiminh City',
            'status' => 1,
            'role' => 'admin',
        ]);
    }
}
