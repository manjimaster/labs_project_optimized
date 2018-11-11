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
                'icons_id' => '1',
            ],
            [
                'name' => 'service2',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '2',
            ],
            [
                'name' => 'service3',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '3',
            ],
            [
                'name' => 'service4',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '4',
            ],
            [
                'name' => 'service5',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '5',
            ],
            [
                'name' => 'service6',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '6',
            ],
            [
                'name' => 'service7',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '7',
            ],
            [
                'name' => 'service8',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '8',
            ],
            [
                'name' => 'service9',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '9',
            ],
            [
                'name' => 'service10',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, consequuntur.',
                'icons_id' => '10',
            ],
        ]);
    }
}
