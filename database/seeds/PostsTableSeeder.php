// /database/migrations/seeds/PostsTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('posts')->delete();
        //DB::table('comments')->delete();

        $posts = array(
            [
                'id' => 1, 
                'user_id' => 1, 
                'name' => 'Blog Post 1', 
                'content' => 'Lorem Ipsum ...', 
                'slug' => 'blog-post-1', 
                'created_at' => new DateTime, 
                'updated_at' => new DateTime, 
                'seo_title' => 'seo title', 
                'seo_description' => 'seo description', 
                'seo_keywords' => 'seo keywords'
            ],
            [
                'id' => 2, 
                'user_id' => 1, 
                'name' => 'Blog Post 2', 
                'content' => 'Lorem Ipsum ...', 
                'slug' => 'looking-for-partnerships', 
                'created_at' => new DateTime, 
                'updated_at' => new DateTime, 
                'seo_title' => 'seo title', 
                'seo_description' => 'seo description', 
                'seo_keywords' => 'seo keywords'
            ],
            [
                'id' => 3, 
                'user_id' => 2, 
                'name' => 'Blog Post 3', 
                'content' => 'Lorem Ipsum ...', 
                'slug' => 'blog-post-3', 
                'created_at' => new DateTime, 
                'updated_at' => new DateTime, 
                'seo_title' => 'seo title', 
                'seo_description' => 'seo description', 
                'seo_keywords' => 'seo keywords'
            ],
            [
                'id' => 4, 
                'user_id' => 2, 
                'name' => 'Blog Post 4', 
                'content' => 'Lorem Ipsum ...', 
                'slug' => 'blog-post-4', 
                'created_at' => new DateTime, 
                'updated_at' => new DateTime, 
                'seo_title' => 'seo title', 
                'seo_description' => 'seo description', 
                'seo_keywords' => 'seo keywords'
            ],
        );

        $comments = array(
          ['id' => 1, 'post_id' => 1, 'user_id' => 1, 'content' => 'Comment one.', 'likes' => 30, 'dislikes' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 2, 'post_id' => 1, 'user_id' => 2, 'content' => 'Comment two.', 'likes' => 50, 'dislikes' => 500, 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 3, 'post_id' => 1, 'user_id' => 1, 'content' => 'Comment one.', 'likes' => 20, 'dislikes' => 13, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
        // Uncomment the below to run the seeder
        DB::table('posts')->insert($posts);
        DB::table('comments')->insert($comments);
    }

}
