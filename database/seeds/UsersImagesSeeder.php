<?php

use Illuminate\Database\Seeder;

class UsersImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_images')->insert([
            [
                'image_url_1' => 'user_1_profile_image.jpg'
            ],
            [
                'image_url_1' => 'user_2_profile_image.jpg'
            ],
            [
                'image_url_1' => 'user_3_profile_image.jpg'
            ],
            [
                'image_url_1' => 'user_4_profile_image.jpg'
            ],
            [
                'image_url_1' => 'user_5_profile_image.jpg'
            ],
            [
                'image_url_1' => 'user_6_profile_image.jpg'
            ],
        ]);
    }
}
