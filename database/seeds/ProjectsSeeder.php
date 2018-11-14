<?php

use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name' => 'project1',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '1',
                'project_images_id' => '1',
                'validation' => '1'
            ], 
            [
                'name' => 'project2',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '2',
                'project_images_id' => '2',
                'validation' => '1'
            ], 
            [
                'name' => 'project3',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '3',
                'project_images_id' => '3',
                'validation' => '1'
            ], 
            [
                'name' => 'project4',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '4',
                'project_images_id' => '4',
                'validation' => '1'
            ], 
            [
                'name' => 'project5',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '5',
                'project_images_id' => '5',
                'validation' => '1'
            ], 
            [
                'name' => 'project6',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '6',
                'project_images_id' => '6',
                'validation' => '1'
            ], 
            [
                'name' => 'project7',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '7',
                'project_images_id' => '7',
                'validation' => '1'
            ], 
            [
                'name' => 'project8',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '8',
                'project_images_id' => '8',
                'validation' => '1'
            ], 
            [
                'name' => 'project9',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '9',
                'project_images_id' => '9',
                'validation' => '1'
            ],
        ]);
    }
}
