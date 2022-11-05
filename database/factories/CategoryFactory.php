<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $table->increments('id');
        // $table->string('name');
        // $table->string('slug')->unique();
        // $table->text('description')->nullable();
        // $table->string('logo')->nullable();
        // $table->bigInteger('priority')->unsigned()->default('10');
        // $table->boolean('enable_homepage')->default(true);
        // $table->bigInteger('parent_id')->unsigned();
        // $table->timestamps();

        return [];
    }
}
