<?php

use Illuminate\Database\Seeder;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'name' => 'Trainee',
                'validation' => '1'
            ],
            [
                'name' => 'Project Manager',
                'validation' => '1'
            ],
            [
                'name' => 'Junior Developer',
                'validation' => '1'
            ],
            [
                'name' => 'Digital Designer',
                'validation' => '1'
            ],
        ]);
    }
}
