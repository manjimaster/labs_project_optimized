<?php

use Illuminate\Database\Seeder;

class TestimonialImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonial_images')->insert([
            [
                'image_url_1' => 'testimonial_1_profile_image.jpg'
            ],
            [
                'image_url_1' => 'testimonial_2_profile_image.jpg'
            ],
            [
                'image_url_1' => 'testimonial_3_profile_image.jpg'
            ],
            [
                'image_url_1' => 'testimonial_4_profile_image.jpg'
            ],
            [
                'image_url_1' => 'testimonial_5_profile_image.jpg'
            ],
            [
                'image_url_1' => 'testimonial_6_profile_image.jpg'
            ],
        ]);
    }
}
