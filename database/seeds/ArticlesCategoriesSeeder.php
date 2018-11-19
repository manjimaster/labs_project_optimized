<?php

use Illuminate\Database\Seeder;

class ArticlesCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles_categories')->insert([
            [
                'article_id' => '1',
                'categorie_id' => '1',
            ],
            [
                'article_id' => '2',
                'categorie_id' => '2',
            ],
            [
                'article_id' => '3',
                'categorie_id' => '3',
            ],
            [
                'article_id' => '4',
                'categorie_id' => '1',
            ],
            [
                'article_id' => '5',
                'categorie_id' => '2',
            ],
            [
                'article_id' => '6',
                'categorie_id' => '1',
            ],
        ]);
    }
}
