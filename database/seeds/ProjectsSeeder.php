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
                'icon' => 'flaticon-001-picture',
                'project_images_id' => '1',
                'validation' => '1'
            ], 
            [
                'name' => 'project2',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-002-caliper',
                'project_images_id' => '2',
                'validation' => '1'
            ], 
            [
                'name' => 'project3',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-003-energy-drink',
                'project_images_id' => '3',
                'validation' => '1'
            ], 
            [
                'name' => 'project4',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-004-build',
                'project_images_id' => '4',
                'validation' => '1'
            ], 
            [
                'name' => 'project5',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-005-thinking-1',
                'project_images_id' => '5',
                'validation' => '1'
            ], 
            [
                'name' => 'project6',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-006-prism',
                'project_images_id' => '6',
                'validation' => '1'
            ], 
            [
                'name' => 'project7',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-007-paint',
                'project_images_id' => '7',
                'validation' => '1'
            ], 
            [
                'name' => 'project8',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-008-team',
                'project_images_id' => '8',
                'validation' => '1'
            ], 
            [
                'name' => 'project9',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-009-idea-3',
                'project_images_id' => '9',
                'validation' => '1'
            ],
        ]);
    }
}
