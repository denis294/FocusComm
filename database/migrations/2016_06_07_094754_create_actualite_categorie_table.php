<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualiteCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualite_categorie', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actualite_id')->unsigned();
            $table->integer('categorie_id')->unsigned();
            $table->foreign('actualite_id')->references('id')->on('actualites');
            $table->foreign('categorie_id')->references('id')->on('categories');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actualite_categorie');
    }
}