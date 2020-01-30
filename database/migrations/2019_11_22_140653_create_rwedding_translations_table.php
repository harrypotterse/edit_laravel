<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRweddingTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rwedding_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rwedding_id')->unsigned();
            $table->string('name');
            $table->longText('body');
            $table->string('locale')->index();
            $table->unique(['rwedding_id','locale']);
            $table->foreign('rwedding_id')->references('id')->on('rweddings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rwedding_translations');
    }
}
