<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ideas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('description_short');
            $table->text('description_long_1');
            $table->text('description_long_2');
            $table->integer('active')->default(1);
            $table->integer('expired')->default(0);
            $table->timestamps();
			$table->softDeletes();
        });
        
        Schema::create('ideas_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idea_id')->unsigned()->nullable();
			$table->foreign('idea_id')->references('id')->on('ideas');
            $table->decimal('funding_amount', 20, 2)->default(0);
            $table->decimal('funding_goal', 20, 2)->default(0);
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->timestamps();
			$table->softDeletes();
        });
        
        Schema::create('ideas_rewards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idea_id')->unsigned()->nullable();
			$table->foreign('idea_id')->references('id')->on('ideas');
            // Reward 1
            $table->string('name_1')->nullable();
            $table->string('image_1')->nullable();
            $table->string('description_1')->nullable();
            $table->decimal('fund_amount_1', 20, 2)->nullable();
            // Reward 2
            $table->string('name_2')->nullable();
            $table->string('image_2')->nullable();
            $table->string('description_2')->nullable();
            $table->decimal('fund_amount_2', 20, 2)->nullable();
            // Reward 3
            $table->string('name_3')->nullable();
            $table->string('image_3')->nullable();
            $table->string('description_3')->nullable();
            $table->decimal('fund_amount_3', 20, 2)->nullable();
            // Reward 4
            $table->string('name_4')->nullable();
            $table->string('image_4')->nullable();
            $table->string('description_4')->nullable();
            $table->decimal('fund_amount_4', 20, 2)->nullable();
            $table->timestamps();
			$table->softDeletes();
        });
        
        Schema::create('ideas_supporters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idea_id')->unsigned()->nullable();
			$table->foreign('idea_id')->references('id')->on('ideas');
            $table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')->references('id')->on('users');
            $table->integer('idea_rewards_id')->unsigned()->nullable();
			$table->foreign('idea_rewards_id')->references('id')->on('ideas_rewards');
            $table->decimal('fund_amount', 20, 2)->default(0);
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
        //
        Schema::drop('ideas');
        Schema::drop('ideas_details');
        Schema::drop('ideas_rewards');
        Schema::drop('ideas_supporters');
    }
}
