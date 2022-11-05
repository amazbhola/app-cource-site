<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('slug')->unique();
			$table->string('banner')->nullable();
			$table->boolean('is_free')->default(false);
			$table->float('price')->default('0');
			$table->float('offer_price')->default('0');
			$table->text('description')->nullable();
			$table->text('meta_description')->nullable();
			$table->text('meta_keywords')->nullable();
			$table->bigInteger('total_view')->unsigned()->default('0');
			$table->bigInteger('total_enrolled')->unsigned()->default('0');
			$table->float('avg_rating')->default('0');
			$table->bigInteger('category_id')->unsigned();
			$table->bigInteger('created_by')->unsigned();
			$table->bigInteger('updated_by')->unsigned();
			$table->text('external_enroll_link')->nullable();
			$table->date('start_date')->nullable();
			$table->date('end_date')->nullable();
			$table->text('status')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('courses');
	}
}