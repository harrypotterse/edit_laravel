<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'body'];
    protected $guarded = [];
}
