<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // UserController::factory(10)->create();

//        UserController::factory()->create([
//            'name' => 'Test UserController',
//            'email' => 'test@example.com',
//        ]);
//        $this -> call([
//            UsersTableSeeder::class,
//        ]);

            $this -> call(AdminTableSeeder::class);
    }
}
