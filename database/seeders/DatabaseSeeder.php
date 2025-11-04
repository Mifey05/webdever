<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\BlogPost;
use App\Models\ProjPost;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(5)->create()->each(function ($user) {
            // Each user gets 2 blogs and 1 project
            BlogPost::factory(2)->create(['user_id' => $user->id]);
            ProjPost::factory(1)->create(['user_id' => $user->id]);
        });
    }
}
