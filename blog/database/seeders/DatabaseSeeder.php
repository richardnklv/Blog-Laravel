<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

         $user = User::factory()->create();

         $personal = Category::create([
            'name' => 'Personal',
             'slug' => 'personal'
         ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

         User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);

         Post::create([
             'user_id' => $user->id,
             'category_id' => $family->id,
             'title' => 'My Family Post',
             'slug' => 'my-first-post',
             'excerpt' => 'Lorem ipsum dolar sit amet.',
             'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus dolor gravida posuere luctus. Etiam egestas accumsan neque. Proin eu augue massa. Nam quis vestibulum lectus. Proin placerat lectus nec magna interdum, in rhoncus arcu accumsan. Vestibulum eget est erat. Proin dictum ante a fermentum tristique. Ut luctus mi sapien, et interdum ipsum maximus eget. Maecenas ex lectus, mattis nec nisi vel, hendrerit tristique neque.'
         ]);

         Post::create([
             'user_id' => $user->id,
             'category_id' => $work->id,
             'title' => 'My Work Post',
             'slug' => 'my-second-post',
             'excerpt' => 'Lorem ipsum dolar sit amet.',
             'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus dolor gravida posuere luctus. Etiam egestas accumsan neque. Proin eu augue massa. Nam quis vestibulum lectus. Proin placerat lectus nec magna interdum, in rhoncus arcu accumsan. Vestibulum eget est erat. Proin dictum ante a fermentum tristique. Ut luctus mi sapien, et interdum ipsum maximus eget. Maecenas ex lectus, mattis nec nisi vel, hendrerit tristique neque.'
         ]);
    }
}
