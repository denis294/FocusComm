<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre',80);
            $table->date('date');
            $table->unique(['titre', 'date']);
            $table->enum('etat', ['publie', 'cache','aValider']);
            $table->integer('user_id')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('badge_id')->unsigned()->nullable();
            $table->integer('categorie_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('badge_id')->references('id')->on('badges')->onDelete('cascade');
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
        Schema::drop('quizzs');
    }
}
