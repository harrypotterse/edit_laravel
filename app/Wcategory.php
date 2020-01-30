<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\rwedding;

class Wcategory extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $guarded = [];

    public function rwedding()
    {
        return $this->hasMany(rwedding::class);
    }

}
