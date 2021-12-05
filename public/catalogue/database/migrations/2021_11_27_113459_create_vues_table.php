<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_utilisateurs');
            $table->unsignedBigInteger('id_media');
           
            $table->timestamps();
   
            $table->foreign('id_utilisateurs')->references('id')->on('users');
            $table->foreign('id_media')->references('id_media')->on('media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vues');
    }
}
