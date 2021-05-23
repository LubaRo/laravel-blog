<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = \App\Models\User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal-category'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work-category'
        ]);

        $hobby = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies-category'
        ]);

        $body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

        Post::create([
            'title' => 'My personal post',
            'category_id' => $personal->id,
            'user_id' => $user->id,
            'slug' => 'my-personal-post',
            'excerpt' => 'Short description',
            'body' => $body
        ]);

        Post::create([
            'title' => 'My work post',
            'category_id' => $work->id,
            'user_id' => $user->id,
            'slug' => 'first-work-post',
            'excerpt' => 'Short description',
            'body' => $body
        ]);

        Post::create([
            'title' => 'My hobby post',
            'category_id' => $hobby->id,
            'user_id' => $user->id,
            'slug' => 'my-hobby-post',
            'excerpt' => 'Short description',
            'body' => $body
        ]);
    }
}
