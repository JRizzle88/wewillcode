// /database/migrations/seeds/PagesTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('pages')->delete();
        //DB::table('comments')->delete();
        
        $pages = array(
            ['id' => 1, 'user_id' => 1, 'name' => 'Page Test 1', 'content' => 'Lorem Ipsum ...', 'slug' => 'page-test-1', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'seo_title' => 'page-test-1', 'seo_description' => 'seo description', 'seo_keywords' => 'seo keywords'],
            ['id' => 2, 'user_id' => 2, 'name' => 'Page Test 2', 'content' => 'Lorem Ipsum ...', 'slug' => 'page-test-2', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'seo_title' => 'page-test-2', 'seo_description' => 'seo description', 'seo_keywords' => 'seo keywords'],
            ['id' => 3, 'user_id' => 2, 'name' => 'Page Test 3', 'content' => 'Lorem Ipsum ...', 'slug' => 'page-test-3', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'seo_title' => 'page-test-3', 'seo_description' => 'seo description', 'seo_keywords' => 'seo keywords'],
            ['id' => 4, 'user_id' => 1, 'name' => 'Page Test 4', 'content' => 'Lorem Ipsum ...', 'slug' => 'page-test-4', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'seo_title' => 'page-test-4', 'seo_description' => 'seo description', 'seo_keywords' => 'seo keywords'],
        );
        
        // Uncomment the below to run the seeder
        DB::table('pages')->insert($pages);
        //DB::table('comments')->insert($comments);
    }

}