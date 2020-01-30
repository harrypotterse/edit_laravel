<?php

namespace App;
use App\Blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $guarded = [];



    public function blog()
    {
        return $this->hasMany(Blog::class);
    }


}
