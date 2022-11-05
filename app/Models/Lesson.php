<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons';
    public $timestamps = true;
    protected $fillable = array('title', 'course_id', 'chapter_id', 'created_by', 'updated_by', 'meta_description', 'meta_keywords', 'deleted_by', 'description', 'priority', 'slug', 'type', 'is_free', 'status', 'labels', 'is_live', 'video_url', 'embedded_url', 'total_view');

    public function course()
    {
        return $this->belongsTo('Course');
    }

    public function chapter()
    {
        return $this->belongsTo('Chapter');
    }
}
