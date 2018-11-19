<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Vestibulum maximus',
                'validation' => '1'
            ],
            [
                'name' => 'Nisi eu lobortis pharetra',
                'validation' => '1'
            ],
            [
                'name' => 'Orci quam accumsan',
                'validation' => '1'
            ],
            [
                'name' => 'Auguen pharetra massa',
                'validation' => '1'
            ],
            [
                'name' => 'Tellus ut nulla',
                'validation' => '1'
            ],
            [
                'name' => 'Etiam egestas viverra',
                'validation' => '1'
            ],
        ]);
    }
}
