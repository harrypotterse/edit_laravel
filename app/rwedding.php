<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wcategory;

class rwedding extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'body'];
    protected $guarded = [];

    public function wcategory()
    {
        return $this->belongsTo(Wcategory::class);
    }

}
