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
                'team' => '1',
                'permanentTeamMember' => '0',
                'biography' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, nemo.',
            ],
            [
                'firstName' => 'char',
                'lastName' => 'Lotte',
                'email' => 'char@yolo.com',
                'password' => Hash::make('yolo'),
                'roles_id' => '2',
                'users_images_id' => '2',
                'positions_id' => '1',
                'team' => '0',
                'permanentTeamMember' => '0',
                'biography' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, nemo.',
            ],
            [
                'firstName' => 'axe',
                'lastName' => 'Hell',
                'email' => 'axe@yolo.com',
                'password' => Hash::make('yolo'),
                'roles_id' => '3',
                'users_images_id' => '3',
                'positions_id' => '3',
                'team' => '0',
                'permanentTeamMember' => '1',
                'biography' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, nemo.',
            ],
            [
                'firstName' => 'ja',
                'lastName' => 'Weed',
                'email' => 'ja@yolo.com',
                'password' => Hash::make('yolo'),
                'roles_id' => '3',
                'users_images_id' => '4',
                'positions_id' => '4',
                'team' => '1',
                'permanentTeamMember' => '0',
                'biography' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, nemo.',
            ],
            [
                'firstName' => 'ber',
                'lastName' => 'Nard',
                'email' => 'ber@yolo.com',
                'password' => Hash::make('yolo'),
                'roles_id' => '3',
                'users_images_id' => '4',
                'positions_id' => '4',
                'team' => '1',
                'permanentTeamMember' => '0',
                'biography' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, nemo.',
            ],
            [
                'firstName' => 'seal',
                'lastName' => 'vie',
                'email' => 'seal@yolo.com',
                'password' => Hash::make('yolo'),
                'roles_id' => '3',
                'users_images_id' => '4',
                'positions_id' => '3',
                'team' => '1',
                'permanentTeamMember' => '0',
                'biography' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, nemo.',
            ],
        ]);
    }
}
