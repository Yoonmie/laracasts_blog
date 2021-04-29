<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        $user= User::factory()->create([
            'name' => 'John'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        // $user=User::factory()->create();
        
        // $personal= Category::create([
        //     'name'=> 'Personal',
        //     'slug'=> 'personal'
        // ]);

        // $family= Category::create([
        //     'name'=> 'Family',
        //     'slug'=> 'family'
        // ]);

        // $work= Category::create([
        //     'name'=> 'Work',
        //     'slug'=> 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My First Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => '<p>When it comes to travelling, there is no other country that has captured my heart like Italy.</p>',
        //     'body' => '<p>When it comes to travelling, there is no other country that has captured my heart like Italy. She has dazzling cities crammed with art and architecture, mesmerising mountains with epic lakes and hikes, breath-taking blue hues along the southern coast</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Second Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => '<p>When it comes to travelling, there is no other country that has captured my heart like Italy.</p>',
        //     'body' => '<p>When it comes to travelling, there is no other country that has captured my heart like Italy. She has dazzling cities crammed with art and architecture, mesmerising mountains with epic lakes and hikes, breath-taking blue hues along the southern coast</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Third Post',
        //     'slug' => 'my-third-post',
        //     'excerpt' => '<p>When it comes to travelling, there is no other country that has captured my heart like Italy.</p>',
        //     'body' => '<p>When it comes to travelling, there is no other country that has captured my heart like Italy. She has dazzling cities crammed with art and architecture, mesmerising mountains with epic lakes and hikes, breath-taking blue hues along the southern coast</p>'
        // ]);
    }
}
