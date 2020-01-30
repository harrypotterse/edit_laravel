<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTranslationsTable extends Migration
{

    public function up()
    {
        Schema::create('about_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('about_id')->unsigned();
            $table->longText('body');
            $table->longText('team');
            $table->longText('vision');
            $table->longText('message');
            $table->longText('offer1');
            $table->longText('offer2');
            $table->longText('how1');
            $table->longText('how2');
            $table->longText('how3');
            $table->string('locale')->index();
            $table->unique(['about_id','locale']);
            $table->foreign('about_id')->references('id')->on('abouts')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('about_translations');
    }
}
