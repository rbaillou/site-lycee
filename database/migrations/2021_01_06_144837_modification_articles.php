<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModificationArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->bigInteger('id_piece_joint')->unsigned();
            $table->foreign('id_piece_joint')->references('id')->on('piece_joints')->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('id_image_article')->unsigned();
            $table->foreign('id_image_article')->references('id')->on('image_articles')->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('id_texte_article')->unsigned();
            $table->foreign('id_texte_article')->references('id')->on('texte_articles')->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('id_image_preview_article')->unsigned();
            $table->foreign('id_image_preview_article')->references('id')->on('image_preview_articles')->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('id_categorie')->unsigned();
            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
