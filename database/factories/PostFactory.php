<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;
    public function definition()
    {
        return [
            'head' => $this->faker->text(20),
            'summary' => $this->faker->text(100),
            'body' => $this->faker->text(1000),
            'user_id' => 1,
            //
        ];
    }
}
