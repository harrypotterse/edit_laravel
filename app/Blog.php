<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Blog extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'body'];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
