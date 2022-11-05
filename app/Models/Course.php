<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    public $timestamps = true;
    protected $fillable = array('title', 'slug', 'banner', 'is_free', 'price', 'offer_price', 'description', 'meta_description', 'meta_keywords', 'total_view', 'total_enrolled', 'avg_rating', 'category_id', 'created_by', 'updated_by', 'external_enroll_link', 'start_date', 'end_date', 'status');

    public function categories()
    {
        return $this->belongsTo('Category');
    }

    public function chapters()
    {
        return $this->hasMany('Chapter');
    }

    public function lessons()
    {
        return $this->hasMany('Lesson');
    }
}
