<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->name;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => fake()->text,
            'category_id' => function () {
                return Category::all()->random();
            },
            'user_id' => function () {
                return User::all()->random();
            }
        ];
    }
}
