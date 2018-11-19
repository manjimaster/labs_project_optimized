<?php

use Illuminate\Database\Seeder;

class ArticlesImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_images')->insert([
            [
                'image_url_1' => 'article_1_image_1.jpg'
            ],
            [
                'image_url_1' => 'article_2_image_1.jpg'
            ],
            [
                'image_url_1' => 'article_3_image_1.jpg'
            ],
            [
                'image_url_1' => 'article_4_image_1.jpg'
            ],
            [
                'image_url_1' => 'article_5_image_1.jpg'
            ],
            [
                'image_url_1' => 'article_6_image_1.jpg'
            ],
        ]);
    }
}
