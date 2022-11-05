<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'email', 'password');

    public function reviews()
    {
        return $this->hasMany('app/Models\Review');
    }

    public function assignments()
    {
        return $this->hasMany('Assignment');
    }

    public function enrolls()
    {
        return $this->hasMany('Enroll');
    }

    public function assignment_submission()
    {
        return $this->hasMany('AssignmentSubmission');
    }

    public function payments()
    {
        return $this->hasMany('Payment');
    }
}
