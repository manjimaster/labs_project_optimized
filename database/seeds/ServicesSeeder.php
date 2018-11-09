<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'service1',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-001-picture',
            ],
            [
                'name' => 'service2',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-002-caliper',
            ],
            [
                'name' => 'service3',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-003-energy-drink',
            ],
            [
                'name' => 'service4',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-004-build',
            ],
            [
                'name' => 'service5',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-005-thinking-1',
            ],
            [
                'name' => 'service6',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-006-prism',
            ],
            [
                'name' => 'service7',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-007-paint',
            ],
            [
                'name' => 'service8',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-008-team',
            ],
            [
                'name' => 'service9',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-009-idea-3',
            ],
            [
                'name' => 'service10',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icon' => 'flaticon-010-diamond',
            ],
        ]);
    }
}
