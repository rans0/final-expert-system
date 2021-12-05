<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListPenyakitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_penyakits', function (Blueprint $table) {
            $table->id('id');
            $table->text('Penyakit');
            $table->text('Info');
            $table->text('Solusi');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('kamus_gejalas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_penyakits');
    }
}
