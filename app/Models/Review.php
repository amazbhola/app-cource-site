<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('rating', 'description', 'user_id', 'course_id');

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function course()
    {
        return $this->belongsTo('Course');
    }
}
