<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VueSqlJoinDouble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::Statement("
            CREATE OR REPLACE VIEW vue_double AS (
            select articles_tags.tag_id, articles_tags.article_id, articles.user_id FROM `articles_tags`

            JOIN articles ON articles_tags.article_id = articles.id
            
                INNER JOIN users ON articles.user_id = users.id )
        ");
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
