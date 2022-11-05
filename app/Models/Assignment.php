<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{

    protected $table = 'assignments';
    public $timestamps = true;
    protected $fillable = array('total_mark', 'course_id', 'user_id');
}
