<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjPost;

class ProjPostSeeder extends Seeder
{
    public function run(): void
    {
        ProjPost::factory()->count(10)->create();
    }
}
