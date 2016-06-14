<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre', 80);
            $table->date('dateCreation');
            $table->unique(['titre', 'dateCreation']);
            $table->text('texte');
            $table->string('image')->nullable();
            $table->integer('actualiteLiee_id')->unsigned()->nullable();
            $table->foreign('actualiteLiee_id')->references('id')->on('actualites');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('updated_by')->unsigned()->nullable();
            $table->foreign('updated_by')->references('id')->on('users');
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categories');
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
         Schema::drop('actualites');
    }
}
