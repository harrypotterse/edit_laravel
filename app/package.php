<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    public $table = 'package';
    public $timestamps = true;
    protected $fillable = [ 'Package', 'price', 'FeaturesA', 'FeaturesB', 'Featuresc', 'Featuresd', 'Language'];
}
