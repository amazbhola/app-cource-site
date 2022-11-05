<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('enroll_id', 'course_id', 'user_id', 'status', 'details', 'note');

    public function course()
    {
        return $this->belongsTo('Course');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function enroll()
    {
        return $this->belongsTo('Enroll');
    }
}
