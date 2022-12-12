<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = true;
    /**
     * Summary of fillable
     * @var mixed
     */
    protected $fillable = array('parent_id', 'name', 'slug', 'description', 'logo', 'priority', 'enable_homepage');
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    /**
     * Summary of parent_categories
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function parent_categories()
    {
        return $this->belongsToMany('app/Models\Category', 'parent_id');
    }

    public function courses()
    {
        return $this->hasMany('Course');
    }
}
