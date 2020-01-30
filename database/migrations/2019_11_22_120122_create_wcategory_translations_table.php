<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWcategoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wcategory_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wcategory_id')->unsigned();
            $table->string('name');
            $table->string('locale')->index();
            $table->unique(['wcategory_id','locale']);
            $table->foreign('wcategory_id')->references('id')->on('wcategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wcategory_translations');
    }
}
