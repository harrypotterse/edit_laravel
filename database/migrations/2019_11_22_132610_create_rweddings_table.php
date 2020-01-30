<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRweddingsTable extends Migration
{

    public function up()
    {
        Schema::create('rweddings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->longText('gallery');
            $table->integer('wcategory_id')->unsigned();
            $table->timestamps();
            $table->foreign('wcategory_id')->references('id')->on('wcategories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rweddings');
    }
}
