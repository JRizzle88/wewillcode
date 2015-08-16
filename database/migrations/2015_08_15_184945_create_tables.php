<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('role', 50)->default('user');
            $table->string('password', 60);
            // point system
			$table->integer('points')->default(0);			  
			// package or product
			$table->integer('license_type')->default(0);
			$table->boolean('valid_license')->default(0);
			// account status
			$table->integer('active')->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });
        
        // Create users information table - belongsTo users
		Schema::create('users_information', function(Blueprint $table) {
			$table->increments('id');			
			// user reference
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');			
			// basic information
            $table->string('company_name')->nullable();
			$table->string('address_1')->nullable();
			$table->string('address_2')->nullable();
      		$table->string('city', 255)->nullable();
			$table->integer('zipcode');
      		$table->string('state', 255)->nullable();
            $table->string('country', 255)->nullable();
      		$table->string('phone', 12)->nullable();
			$table->string('phone_secondary', 12)->nullable();			
			// social info
			$table->string('linkedin')->nullable();
			$table->string('twitter')->nullable();
			$table->string('instagram')->nullable();
			$table->string('facebook')->nullable();
			$table->string('googleplus')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
        
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->text('payload');
            $table->integer('last_activity');
        });
        
        // Create posts Table - hasMany posts_categories
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('name');
			$table->text('content');
			$table->string('featured_image');
			$table->string('slug')->nullable();
			$table->string('seo_title');
			$table->string('seo_description');
			$table->string('seo_keywords');
			$table->boolean('draft')->default(false);
			$table->timestamps();
			$table->softDeletes();
		});
        
        // Create pages table
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('name');
			$table->text('content');
			$table->string('slug')->nullable();
			$table->string('seo_title');
			$table->string('seo_description');
			$table->string('seo_keywords');
			$table->boolean('draft')->default(false);
			$table->timestamps();
			$table->softDeletes();
		});
        
        // Create comments table
        Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('post_id')->unsigned()->default(0);
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');
			$table->text('content');
			$table->integer('likes')->nullable()->default(0);
			$table->integer('dislikes')->nullable()->default(0);
			$table->timestamps();
			$table->softDeletes();
		});
		
		// Create fileentries table
		Schema::create('fileentries', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('filename');
			$table->string('mime');
			$table->string('original_filename');
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
        // drop pages table
		Schema::drop('pages');
		// drop posts table
		Schema::drop('posts');
		// drop comments table
		Schema::drop('comments');
		// drop fileentries table
		Schema::drop('fileentries');
        // drop sessions table
        Schema::drop('sessions');
        // drop password_resets table
        Schema::drop('password_resets');
        // drop users_information table - STAYS DIRECTLY ABOVE USERS
		Schema::drop('users_information');
		// drop users table - STAYS LAST
		Schema::drop('users');
    }
}
