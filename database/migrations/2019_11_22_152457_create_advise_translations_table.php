<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdviseTranslationsTable extends Migration
{

    public function up()
    {
        Schema::create('advise_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('advise_id')->unsigned();
            $table->string('name');
            $table->longText('body');
            $table->string('locale')->index();
            $table->unique(['advise_id','locale']);
            $table->foreign('advise_id')->references('id')->on('advises')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('advise_translations');
    }
}
