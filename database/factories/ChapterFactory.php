<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chapter>
 */
class ChapterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $table->increments('id');
        // $table->bigInteger('course_id')->unsigned();
        // $table->string('title');
        // $table->string('slug')->unique();
        // $table->bigInteger('priority')->unsigned()->default('10');
        // $table->bigInteger('created_by')->unsigned();
        // $table->bigInteger('updated_by')->unsigned();
        // $table->string('banner')->nullable();
        // $table->text('description')->nullable();
        // $table->text('meta_description')->nullable();
        // $table->text('meta_keywords')->nullable();
        // $table->text('status')->nullable();
        // $table->timestamps();
        return [
            'title' => fake()->sentence(10),
            'slug' => fake()->slug(),
            'priority' => fake()->unique()->randomNumber(1, 100),
            'course_id' => fake()->randomNumber(1, 20),
            'created_by' => fake()->randomNumber(1, 20),
            'updated_by' => fake()->randomNumber(1, 20),
            'banner' => '',
            'description' => fake()->text(),
            'meta_description' => fake()->sentence(),
            'meta_keywords' => json_encode(fake()->words(10)),
            'status' => '',
        ];
    }
}
