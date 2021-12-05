<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamusGejalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamus_gejalas', function (Blueprint $table) {
            $table->id();
            $table->integer('G001');
            $table->integer('G002');
            $table->integer('G003');
            $table->integer('G004');
            $table->integer('G005');
            $table->integer('G006');
            $table->integer('G007');
            $table->integer('G008');
            $table->integer('G009');
            $table->integer('G010');
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
        Schema::dropIfExists('kamus_gejalas');
    }
}
