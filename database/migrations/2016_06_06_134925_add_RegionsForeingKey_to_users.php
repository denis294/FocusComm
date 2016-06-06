<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegionsForeingKeyToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function(Blueprint $table){         
            $table->integer('region_id')->unsigned()->after('sexe');
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function(Blueprint $table){         
            $table->dropColumn('region_id');
        });
    }
}
