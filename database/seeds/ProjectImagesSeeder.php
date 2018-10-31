<?php

use Illuminate\Database\Seeder;

class ProjectImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_images')->insert([
            [
                'image_url_1' => 'project_1_image_1.jpg'
            ],
            [
                'image_url_1' => 'project_2_image_1.jpg'
            ],
            [
                'image_url_1' => 'project_3_image_1.jpg'
            ],
            [
                'image_url_1' => 'project_4_image_1.jpg'
            ],
            [
                'image_url_1' => 'project_5_image_1.jpg'
            ],
            [
                'image_url_1' => 'project_6_image_1.jpg'
            ],
            [
                'image_url_1' => 'project_7_image_1.jpg'
            ],
            [
                'image_url_1' => 'project_8_image_1.jpg'
            ],
            [
                'image_url_1' => 'project_9_image_1.jpg'
            ],
        ]);
    }
}
