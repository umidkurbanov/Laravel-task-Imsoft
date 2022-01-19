<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    //protected $model = \App\Models\Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => Str::of($this->faker->name())->slug('-'),
        ];
    }
}
