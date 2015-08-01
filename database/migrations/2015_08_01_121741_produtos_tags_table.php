<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutosTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produto_id',false,true);//temos que apos a chave estrangeira com a op��o unsigned setando true na function
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->integer('tag_id',false,true);//temos que apos a chave estrangeira com a op��o unsigned setando true na function
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produto_tag');
    }
}
