<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentaireUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_commentaire');
            $table->unsignedBigInteger('id_utilisateur');
            $table->text('date');
            $table->timestamps();
   
            $table->foreign('id_commentaire')->references('id')->on('commentaires');
            $table->foreign('id_utilisateur')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaire_user');
    }
}
