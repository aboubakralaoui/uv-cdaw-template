<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtisteMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artiste_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_artiste');
            $table->unsignedBigInteger('id_media');
            $table->text('date');
            $table->timestamps();
   
            $table->foreign('id_artiste')->references('id')->on('artistes');
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
        Schema::dropIfExists('artiste_media');
    }
}
