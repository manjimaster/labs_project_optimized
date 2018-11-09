<?php

use Illuminate\Database\Seeder;

class LinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert([
            [
                'content' => 'https://www.youtube.com/watch?v=JgHfx2v9zOU',
                'uses' => '1a',
                'comments' => 'video before testimonials',
            ],
            [
                'content' => 'https://colorlib.com/',
                'uses' => 'footer',
                'comments' => 'footer/copyright',
            ], 
        ]);
    }
}
