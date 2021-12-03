<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylisteUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playliste_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_playliste');
            $table->unsignedBigInteger('id_user');
         
            $table->timestamps();
   
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_playliste')->references('id')->on('playlistes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playliste_user');
    }
}
