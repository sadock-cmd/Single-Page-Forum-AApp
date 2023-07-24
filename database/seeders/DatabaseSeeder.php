<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Like;
use App\Models\User;
use App\Models\Reply;
use App\Models\Category;
use App\Models\Question;
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
        // factory(User::class, 10)->create();
        // factory(Category::class, 5)->create();
        // factory(Question::class, 10)->create();
        // factory(Reply::class, 50)->create()->each(function ($reply) {
        //     return $reply->like()->save(factory(Like::class)->make());
        // });

        User::factory(10)->create();
        Category::factory(5)->create();
        Question::factory(10)->create();
        Reply::factory(50)->create();
        // Reply::factory(50)->create()->each(function ($reply) {
        //     return $reply->like()->save(factory(Like::class)->make());
        // });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
