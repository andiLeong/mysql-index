<?php

namespace Database\Seeders;

use App\Models\Cost;
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
         $users = User::factory(1000)->create();
         $users->each(function($user){
             Cost::factory()->create([
                 'user_id' => $user->id
             ]);
         });


    }
}
