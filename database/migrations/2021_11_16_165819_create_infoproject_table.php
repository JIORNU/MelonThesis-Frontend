<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoprojectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infoproject', function (Blueprint $table) {
            $table->id();
            $table->string('idproject');
            $table->string('leafwidth');
            $table->string('heighttree');
            $table->string('numberofverses');
             $table->string('chlorophyll');
             $table->string('numberofleaf');
             $table->string('widthofyield');
             $table->string('Brix');
             $table->string('weight');
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
        Schema::dropIfExists('infoproject');
    }
}
