<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $user = User::factory(3)->create();

         Category::create([
            'name' => 'Personal',
             'slug' => 'personal'
         ]);

        Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

         User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);
    }
}
