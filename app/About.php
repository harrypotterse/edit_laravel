<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'body', 'message', 'vision', 'team', 'offer1', 'offer2', 'how1', 'how2', 'how3'];
    protected $guarded = [];
}
