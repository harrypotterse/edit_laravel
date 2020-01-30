<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('scategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('scategories');
    }
}
