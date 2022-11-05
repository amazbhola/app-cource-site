<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'title' => fake()->sentence(),
            'slug' => fake()->unique()->slug(),
            'is_free' => fake()->randomElement([0, 1]),
            'price' => fake()->randomFloat(2, 0, 10000),
            'offer_price' => 0,
            'description' => fake()->text(100),
            'meta_description' => fake()->unique()->text(20),
            'meta_keywords' => json_encode(fake()->words(20)),
            'total_view' => 0,
            'total_enrolled' => 0,
            'avg_rating' => 5,
            'category_id' => fake()->numberBetween(1, 20),
            'created_by' => fake()->numberBetween(1, 2),
            'updated_by' => fake()->numberBetween(1, 2),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),


        ];
    }
}
