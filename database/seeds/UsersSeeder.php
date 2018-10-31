<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'firstName' => 'seb',
                'lastName' => 'Astier',
                'email' => 'yolo@yolo.com',
                'password' => Hash::make('yolo'),
                'roles_id' => '1',
                'users_images_id' => '1',
                'positions_id' => '2',
            ],
            [
                'firstName' => 'char',
                'lastName' => 'Lotte',
                'email' => 'char@yolo.com',
                'password' => Hash::make('yolo'),
                'roles_id' => '2',
                'users_images_id' => '2',
                'positions_id' => '1',
            ],
            [
                'firstName' => 'axe',
                'lastName' => 'Hell',
                'email' => 'axe@yolo.com',
                'password' => Hash::make('yolo'),
                'roles_id' => '3',
                'users_images_id' => '3',
                'positions_id' => '3',
            ],
            [
                'firstName' => 'ja',
                'lastName' => 'Weed',
                'email' => 'ja@yolo.com',
                'password' => Hash::make('yolo'),
                'roles_id' => '3',
                'users_images_id' => '4',
                'positions_id' => '4',
            ],
        ]);
    }
}
