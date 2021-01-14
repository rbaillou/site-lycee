<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_articles', function (Blueprint $table) {
            $table->id();
            $table->string('pathImage')->nullable();
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
        Schema::dropIfExists('image_articles');
    }
}
