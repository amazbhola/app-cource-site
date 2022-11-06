<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChaptersTable extends Migration
{

    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('course_id')->unsigned();
            $table->string('title');
            $table->string('slug')->unique();
            $table->bigInteger('priority')->unsigned()->default('10');
            $table->bigInteger('created_by')->unsigned();
            $table->bigInteger('updated_by')->unsigned();
            $table->string('banner')->nullable();
            $table->text('description')->nullable();
            $table->text('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('chapters');
    }
}
