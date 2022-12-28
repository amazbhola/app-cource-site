<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $table = 'users';
    public $timestamps = true;



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
