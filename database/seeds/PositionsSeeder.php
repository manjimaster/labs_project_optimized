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
                'name' => 'Trainee'
            ],
            [
                'name' => 'Project Manager'
            ],
            [
                'name' => 'Junior Developer'
            ],
            [
                'name' => 'Digital Designer'
            ],
        ]);
    }
}
