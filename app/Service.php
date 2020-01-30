<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scategory;

use App\User;

class Service extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'body'];
    protected $guarded = [];


    public function scategory()
    {
        return $this->belongsTo(Scategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
