<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enroll extends Model
{
    use HasFactory;

    protected $table = 'enrolls';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('user_id', 'course_id');

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function course()
    {
        return $this->belongsTo('Course');
    }
}
