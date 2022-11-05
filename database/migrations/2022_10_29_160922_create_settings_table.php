<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->string('website_name');
			$table->string('logo')->nullable();
			$table->string('phone_no')->nullable();
			$table->string('email')->nullable();
			$table->text('footer_text')->nullable();
			$table->string('open_close_time');
			$table->string('address')->nullable();
			$table->text('labels')->nullable();
			$table->text('options')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}