<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name' => 'branding',
                'validation' => '1'
            ],
            [
                'name' => 'identity',
                'validation' => '1'
            ],
            [
                'name' => 'video',
                'validation' => '1'
            ],
            [
                'name' => 'design',
                'validation' => '1'
            ],
            [
                'name' => 'inspiration',
                'validation' => '1'
            ],
            [
                'name' => 'web design',
                'validation' => '1'
            ],
            [
                'name' => 'photography',
                'validation' => '1'
            ],
        ]);
    }
}
