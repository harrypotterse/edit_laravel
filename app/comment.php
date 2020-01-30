<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public $table = 'comment';
    public $timestamps = true;
     protected $fillable = ['Name', 'comment', 'Service'];
}
