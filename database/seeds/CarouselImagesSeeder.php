<?php

use Illuminate\Database\Seeder;

class CarouselImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousel_images')->insert([
            [
                'image_url' => 'carousel_image_1.jpg'
            ],
            [
                'image_url' => 'carousel_image_2.jpg'
            ],
            [
                'image_url' => 'carousel_image_3.jpg'
            ],
        ]);
    }
}
