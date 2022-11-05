<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssignmentSubmissionsTable extends Migration {

	public function up()
	{
		Schema::create('assignment_submissions', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('assignment_id')->unsigned();
			$table->bigInteger('user_id')->unsigned();
			$table->text('description')->nullable();
			$table->float('result')->default('0');
			$table->bigInteger('reviewed_by')->unsigned()->nullable();
			$table->text('review_description')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('assignment_submissions');
	}
}