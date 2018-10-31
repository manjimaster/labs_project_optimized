<?php

use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'name' => 'testimonial1',
                'position' => 'CEO 1',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur. Praesentium, obcaecati. Dolor expedita vitae, adipisci rerum veritatis voluptates fugit nobis omnis vero totam assumenda facere delectus accusantium quia architecto non soluta voluptas consequuntur quis nihil doloremque excepturi ut! Nihil necessitatibus, sint similique enim minima repellendus illum consectetur odio iste.',
                'testimonial_images_id' => '1',
                'validation' => '1'
            ],
            [
                'name' => 'testimonial2',
                'position' => 'CEO 2',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur. Praesentium, obcaecati. Dolor expedita vitae, adipisci rerum veritatis voluptates fugit nobis omnis vero totam assumenda facere delectus accusantium quia architecto non soluta voluptas consequuntur quis nihil doloremque excepturi ut! Nihil necessitatibus, sint similique enim minima repellendus illum consectetur odio iste.',
                'testimonial_images_id' => '2',
                'validation' => '1'
            ],
            [
                'name' => 'testimonial3',
                'position' => 'CEO 3',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur. Praesentium, obcaecati. Dolor expedita vitae, adipisci rerum veritatis voluptates fugit nobis omnis vero totam assumenda facere delectus accusantium quia architecto non soluta voluptas consequuntur quis nihil doloremque excepturi ut! Nihil necessitatibus, sint similique enim minima repellendus illum consectetur odio iste.',
                'testimonial_images_id' => '3',
                'validation' => '1'
            ],
            [
                'name' => 'testimonial4',
                'position' => 'CEO 4',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur. Praesentium, obcaecati. Dolor expedita vitae, adipisci rerum veritatis voluptates fugit nobis omnis vero totam assumenda facere delectus accusantium quia architecto non soluta voluptas consequuntur quis nihil doloremque excepturi ut! Nihil necessitatibus, sint similique enim minima repellendus illum consectetur odio iste.',
                'testimonial_images_id' => '4',
                'validation' => '1'
            ],
            [
                'name' => 'testimonial5',
                'position' => 'CEO 5',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur. Praesentium, obcaecati. Dolor expedita vitae, adipisci rerum veritatis voluptates fugit nobis omnis vero totam assumenda facere delectus accusantium quia architecto non soluta voluptas consequuntur quis nihil doloremque excepturi ut! Nihil necessitatibus, sint similique enim minima repellendus illum consectetur odio iste.',
                'testimonial_images_id' => '5',
                'validation' => '1'
            ],
            [
                'name' => 'testimonial6',
                'position' => 'CEO 6',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur. Praesentium, obcaecati. Dolor expedita vitae, adipisci rerum veritatis voluptates fugit nobis omnis vero totam assumenda facere delectus accusantium quia architecto non soluta voluptas consequuntur quis nihil doloremque excepturi ut! Nihil necessitatibus, sint similique enim minima repellendus illum consectetur odio iste.',
                'testimonial_images_id' => '6',
                'validation' => '1'
            ], 
        ]);
    }
}
