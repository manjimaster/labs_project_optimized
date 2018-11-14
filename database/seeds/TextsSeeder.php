<?php

use Illuminate\Database\Seeder;

class TextsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texts')->insert([
            [
                'content_p1' => 'Get your freebie template now!',
                'content_p2' =>'lorem', 
                'content_p3' =>'lorem', 
                'uses' => '1a',
                'comments' => 'text on carousel',
            ],
            [
                'content_p1' => 'Get in ',
                'uses' => '1b1',
                'content_p2' => 'the Lab',
                'comments' => 'title of text between random 3 services and video',
                'content_p3' => ' and discover the world',
            ],
            [
                'content_p1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.
                ',
                'content_p2' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.', 
                'content_p3' =>'lorem', 
                'uses' => '1b2',
                'comments' => 'text between random 3 services and video',
            ],
            [
                'content_p1' => 'What our clients say',
                'content_p2' =>'lorem', 
                'content_p3' =>'lorem', 
                'uses' => '1c',
                'comments' => 'testimonials title',
            ],
            [
                'content_p1' => 'Get in ',
                'content_p2' => 'the Lab', 
                'content_p3' => ' and see the services', 
                'uses' => '1d',
                'comments' => 'title of all services',
            ],
            [
                'content_p1' => 'Get in ',
                'content_p2' => 'the Lab', 
                'content_p3' => ' and meet the team', 
                'uses' => '1e',
                'comments' => 'title of team part',
            ],
            [
                'content_p1' => 'Are you ready to stand out?',
                'content_p2' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.', 
                'content_p3' =>'lorem', 
                'uses' => '1f',
                'comments' => 'stand out text',
            ],
            [
                'content_p1' => '2017 All rights reserved. Designed by ',
                'content_p2' =>'lorem', 
                'content_p3' =>'lorem', 
                'uses' => 'footer',
                'comments' => 'footer/copyright',
            ],
            [
                'content_p1' => 'Colorlib ',
                'content_p2' =>'lorem', 
                'content_p3' =>'lorem', 
                'uses' => 'footerLink',
                'comments' => 'footer/copyright link name',
            ],
            [
                'content_p1' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.',
                'content_p2' =>'lorem', 
                'content_p3' =>'lorem', 
                'uses' => 'quote',
                'comments' => 'quote',
            ],
        ]);
    }
}
