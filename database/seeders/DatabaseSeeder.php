<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       for ($i=0; $i < 10 ; $i++) {     
        Project::create([
            "title" => fake()->realText(30),
            "deskription" => fake()->realText(),
            "url" => fake()->url(),
            "thumbnail" => fake()->imageUrl()
        ]);
       }
    }
}
