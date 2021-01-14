<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTexteArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texte_articles', function (Blueprint $table) {
            $table->id('id');
            $table->longText('textHTML');
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
        Schema::dropIfExists('texte_articles');
    }
}
