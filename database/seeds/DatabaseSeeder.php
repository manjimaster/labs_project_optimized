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
        $this->call(TestimonialImagesSeeder::class);
        $this->call(TestimonialsSeeder::class);
        $this->call(InstagramSeeder::class);
        $this->call(CarouselImagesSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(LinksSeeder::class);
        $this->call(TextsSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(IcnosSeeder::class);
        $this->call(ProjectImagesSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(RolesUsersSeeder::class);
        $this->call(ArticlesImagesSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(ArticlesCategoriesSeeder::class);
        $this->call(ArticlesTagsSeeder::class);
        $this->call(CommentsSeeder::class);
    }
}
