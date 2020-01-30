<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Package', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('Package');
            $table->text('price');
            $table->text('FeaturesA');
            $table->text('FeaturesB');
            $table->text('Featuresc');
            $table->text('Featuresd');
            $table->text('Language');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Package');
    }
}
