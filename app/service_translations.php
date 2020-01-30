<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service_translations extends Model
{
    public $table = 'service_translations';
    public $timestamps = false;
    protected $fillable = ['id', 'service_id', 'name', 'body', 'locale'];
    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
