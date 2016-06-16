<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('nom', ['create', 'update', 'delete', 'read']);
            $table->integer('group_id')->unsigned();
            $table->integer('serviceApplicatif_id')->unsigned();
            $table->foreign('serviceApplicatif_id')->references('id')->on('serviceapplicatifs');
            $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roles');
    }
}
