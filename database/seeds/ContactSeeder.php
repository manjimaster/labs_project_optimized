<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'title_1' => 'CONTACT US',
            'content' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'title_2' => 'Main Office',
            'address_1' => 'C/ Libertad, 34',
            'address_2' => '05200 Arévalo',
            'phone_1' => '0034 37483 2445 322',
            'phone_2' => '',
            'email_1' => 'hello@company.com',
            'email_2' => '',
        ]);
    }
}
