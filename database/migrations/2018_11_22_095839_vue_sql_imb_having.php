<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VueSqlImbHaving extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::Statement("
            CREATE OR REPLACE VIEW vue_sql_imb_having AS 

            select at.tag_id as tag_id, 
            at.article_id as article_id, 
            a.user_id as user_id 
            
            FROM `articles_tags` at

            JOIN (articles a 
            
                JOIN users u ON a.user_id = u.id 
                )
            ON at.article_id = a.id

            HAVING a.user_id < 3
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
