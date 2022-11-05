<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{

    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->foreign('updated_by')->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('categories')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->foreign('updated_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('chapters', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('chapters', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('chapters', function (Blueprint $table) {
            $table->foreign('updated_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->foreign('chapter_id')->references('id')->on('chapters')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->foreign('updated_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->foreign('deleted_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('assignments', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('assignments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('lesson_attachments', function (Blueprint $table) {
            $table->foreign('lesson_id')->references('id')->on('lessons')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('reviews', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('reviews', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('assignment_submissions', function (Blueprint $table) {
            $table->foreign('assignment_id')->references('id')->on('assignments')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('assignment_submissions', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('assignment_submissions', function (Blueprint $table) {
            $table->foreign('reviewed_by')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('enrolls', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('enrolls', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('enroll_id')->references('id')->on('enrolls')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('parent_payment_id')->references('id')->on('payments')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropForeign('pages_created_by_foreign');
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->dropForeign('pages_updated_by_foreign');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign('categories_parent_id_foreign');
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign('courses_category_id_foreign');
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign('courses_created_by_foreign');
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign('courses_updated_by_foreign');
        });
        Schema::table('chapters', function (Blueprint $table) {
            $table->dropForeign('chapters_course_id_foreign');
        });
        Schema::table('chapters', function (Blueprint $table) {
            $table->dropForeign('chapters_created_by_foreign');
        });
        Schema::table('chapters', function (Blueprint $table) {
            $table->dropForeign('chapters_updated_by_foreign');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('lessons_course_id_foreign');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('lessons_chapter_id_foreign');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('lessons_created_by_foreign');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('lessons_updated_by_foreign');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('lessons_deleted_by_foreign');
        });
        Schema::table('assignments', function (Blueprint $table) {
            $table->dropForeign('assignments_course_id_foreign');
        });
        Schema::table('assignments', function (Blueprint $table) {
            $table->dropForeign('assignments_user_id_foreign');
        });
        Schema::table('lesson_attachments', function (Blueprint $table) {
            $table->dropForeign('lesson_attachments_lesson_id_foreign');
        });
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('reviews_user_id_foreign');
        });
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('reviews_course_id_foreign');
        });
        Schema::table('assignment_submissions', function (Blueprint $table) {
            $table->dropForeign('assignment_submissions_assignment_id_foreign');
        });
        Schema::table('assignment_submissions', function (Blueprint $table) {
            $table->dropForeign('assignment_submissions_user_id_foreign');
        });
        Schema::table('assignment_submissions', function (Blueprint $table) {
            $table->dropForeign('assignment_submissions_reviewed_by_foreign');
        });
        Schema::table('enrolls', function (Blueprint $table) {
            $table->dropForeign('enrolls_user_id_foreign');
        });
        Schema::table('enrolls', function (Blueprint $table) {
            $table->dropForeign('enrolls_course_id_foreign');
        });
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('payments_enroll_id_foreign');
        });
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('payments_course_id_foreign');
        });
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('payments_user_id_foreign');
        });
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('payments_parent_payment_id_foreign');
        });
    }
}
