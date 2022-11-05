<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LessonAttachment extends Model
{
    use HasFactory;
    protected $table = 'lesson_attachments';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('title', 'url', 'lesson_id');

    public function lesson()
    {
        return $this->belongsTo('Lesson');
    }
}
