<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLessonAttachmentsTable extends Migration {

	public function up()
	{
		Schema::create('lesson_attachments', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('url')->nullable();
			$table->bigInteger('lesson_id')->unsigned();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('lesson_attachments');
	}
}