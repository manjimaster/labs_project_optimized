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
                'content' => '<p>Get your freebie template now!</p>',
                'uses' => '1a',
                'comments' => 'text on carousel',
            ],
            [
                'content' => 'Get in ',
                'uses' => '1bp1',
                'comments' => 'title of text between random 3 services and video',
            ],
            [
                'content' => 'the Lab',
                'uses' => '1bsp',
                'comments' => 'title of text between random 3 services and video',
            ],
            [
                'content' => ' and discover the world',
                'uses' => '1bp2',
                'comments' => 'title of text between random 3 services and video',
            ], 
            [
                'content' => '
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.
                            </p>
                        </div>
                    </div>
                ',
                'uses' => '1b',
                'comments' => 'text between random 3 services and video',
            ],
            [
                'content' => '<h2>What our clients say</h2>',
                'uses' => '1c',
                'comments' => 'testimonials title',
            ],
            [
                'content' => 'Get in ',
                'uses' => '1dp1',
                'comments' => 'title of all services',
            ],
            [
                'content' => 'the Lab',
                'uses' => '1dsp',
                'comments' => 'title of all services',
            ],
            [
                'content' => ' and see the services',
                'uses' => '1dp2',
                'comments' => 'title of all services',
            ],
            [
                'content' => 'Get in ',
                'uses' => '1ep1',
                'comments' => 'title of team part',
            ],
            [
                'content' => 'the Lab',
                'uses' => '1esp',
                'comments' => 'title of team part',
            ],
            [
                'content' => ' and meet the team',
                'uses' => '1ep2',
                'comments' => 'title of team part',
            ],
            [
                'content' => '<h2>Are you ready to stand out?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>',
                'uses' => '1f',
                'comments' => 'stand out text',
            ],
            [
                'content' => '2017 All rights reserved. Designed by ',
                'uses' => 'footer',
                'comments' => 'footer/copyright',
            ],
            [
                'content' => 'Colorlib ',
                'uses' => 'footerLink',
                'comments' => 'footer/copyright link name',
            ],
            [
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.',
                'uses' => 'quote',
                'comments' => 'quote',
            ],
        ]);
    }
}
