<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvisesTable extends Migration
{

    public function up()
    {
        Schema::create('advises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->longText('gallery');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('advises');
    }
}
