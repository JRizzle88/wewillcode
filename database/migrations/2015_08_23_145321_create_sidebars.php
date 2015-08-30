<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSidebars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidebars', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('post_id')->unsigned()->nullable();
			$table->foreign('post_id')->references('id')->on('posts');
            $table->integer('page_id')->unsigned()->nullable();
			$table->foreign('page_id')->references('id')->on('pages');
            $table->string('name');
            $table->string('description');
            $table->integer('active')->default(1);
            $table->timestamps();
			$table->softDeletes();
        });
        
        Schema::create('widgets', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('sidebar_id')->unsigned()->nullable();
			$table->foreign('sidebar_id')->references('id')->on('sidebars');
            $table->string('name');
            $table->string('description');
            $table->text('content');
            $table->integer('active')->default(1);
            $table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sidebars');
        Schema::drop('widgets');
    }
}
