<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriesPostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'posts_id' => mt_rand(1,15),
            'categories_id' => mt_rand(1,5)
        ];
    }
}
