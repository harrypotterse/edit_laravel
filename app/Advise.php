<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advise extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'body'];
    protected $guarded = [];
}
