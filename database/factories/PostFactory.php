<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    //protected $model = \App\Models\Post::class;
    
    public function definition()
    {
        return [
            'category_id' => '1',
            'name' => $this->faker->name(),
            'slug' => Str::of($this->faker->name())->slug('-'),
            'body' => $this->faker->name(),
        ];
    }
}
