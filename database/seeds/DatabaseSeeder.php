<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(UsersImagesSeeder::class);
        $this->call(PositionsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ProjectImagesSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(RolesUsersSeeder::class);
    }
}
