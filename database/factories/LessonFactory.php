<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $table->increments('id');
        // $table->string('title');
        // $table->bigInteger('course_id')->unsigned();
        // $table->bigInteger('chapter_id')->unsigned();
        // $table->bigInteger('created_by')->unsigned();
        // $table->bigInteger('updated_by')->unsigned();
        // $table->text('meta_description')->nullable();
        // $table->text('meta_keywords');
        // $table->bigInteger('deleted_by')->unsigned();
        // $table->text('description')->nullable();
        // $table->bigInteger('priority')->default('10');
        // $table->string('slug');
        // $table->enum('type', array('video', 'text', 'assignment'))->nullable();
        // $table->boolean('is_free')->nullable()->default(false);
        // $table->boolean('status')->default(true);
        // $table->enum('labels', array('beginner', 'intermediate', 'advance'));
        // $table->boolean('is_live')->default(false);
        // $table->string('video_url')->nullable();
        // $table->string('embedded_url')->nullable();
        // $table->bigInteger('total_view')->default('0');
        // $table->timestamps();
        return [
            'title' => '',
            'course_id' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ];
    }
}
