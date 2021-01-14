<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePieceArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piece_joints', function (Blueprint $table) {
            $table->id();
            $table->string('pathPiece')->nullable();
            $table->unsignedBigInteger('idArticle');
            $table->timestamps();
            $table->foreign('idArticle')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piece_article');
    }
}
