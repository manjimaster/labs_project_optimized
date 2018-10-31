<?php

use Illuminate\Database\Seeder;

class InstagramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instagrams')->insert([
            [
                'image_url' => 'instagram_image_1.jpg'
            ],
            [
                'image_url' => 'instagram_image_2.jpg'
            ],
            [
                'image_url' => 'instagram_image_3.jpg'
            ],
            [
                'image_url' => 'instagram_image_4.jpg'
            ],
            [
                'image_url' => 'instagram_image_5.jpg'
            ],
            [
                'image_url' => 'instagram_image_6.jpg'
            ],
        ]);
    }
}
