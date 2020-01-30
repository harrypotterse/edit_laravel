<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    public $table = 'services';
    public $timestamps = true;
     protected $fillable = ['id', 'avatar', 'gallery', 'scategory_id', 'user_id'];
}
