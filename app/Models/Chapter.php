<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{

    protected $table = 'chapters';
    public $timestamps = true;
    protected $fillable = array('course_id', 'title', 'slug', 'priority', 'created_by', 'updated_by', 'banner', 'description', 'meta_description', 'meta_keywords', 'status');

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons()
    {
        return $this->hasMany('Lesson');
    }

    public function assignments()
    {
        return $this->hasMany('Assignment');
    }

    public function assignment_submission()
    {
        return $this->hasMany('AssignmentSubmission');
    }

    public function enrolls()
    {
        return $this->hasMany('Enroll');
    }

    public function payments()
    {
        return $this->hasMany('Payment');
    }
}
