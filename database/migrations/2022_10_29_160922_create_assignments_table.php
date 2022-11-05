<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssignmentsTable extends Migration {

	public function up()
	{
		Schema::create('assignments', function(Blueprint $table) {
			$table->increments('id');
			$table->float('total_mark')->default('0');
			$table->bigInteger('course_id')->unsigned();
			$table->timestamps();
			$table->bigInteger('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('assignments');
	}
}