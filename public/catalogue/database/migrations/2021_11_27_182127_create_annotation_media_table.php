<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnotationMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annotation_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_annotation');
            $table->unsignedBigInteger('id_media');
            $table->text('date');
            $table->timestamps();
   
            $table->foreign('id_annotation')->references('id')->on('annotations');
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
        Schema::dropIfExists('annotation_media');
    }
}
