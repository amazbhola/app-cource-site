<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('website_name', 'logo', 'phone_no', 'footer_text', 'open_close_time', 'address', 'options');
}
