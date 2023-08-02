<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "id" => 1,
            "username" => "Po",
            "email" => "po@gmail.com",
            "password" => "gina",
            "profile_picture_url" => "img/profile-picture.png",
        ]);

        DB::table("shows")->insert([
            "id" => 1,
            "title" => "Kungfu Panda 1",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2008",
            "maturity_rating" => "PG",
            "number_of_seasons" => 1,
            "type" => "MOVIE",
            "poster_url" => "img/posters/kungfu-panda-1.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 2,
            "title" => "Kungfu Panda 2",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2011",
            "maturity_rating" => "PG",
            "number_of_seasons" => 1,
            "type" => "MOVIE",
            "poster_url" => "img/posters/kungfu-panda-2.jpg",
        ]);
        
        DB::table("shows")->insert([
            "id" => 3,
            "title" => "Kungfu Panda 3",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2016",
            "maturity_rating" => "PG",
            "number_of_seasons" => 1,
            "type" => "MOVIE",
            "poster_url" => "img/posters/kungfu-panda-3.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 4,
            "title" => "Kungfu Panda 4",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2024",
            "maturity_rating" => "PG",
            "number_of_seasons" => 1,
            "type" => "MOVIE",
            "poster_url" => "img/posters/kungfu-panda-4.jpeg",
        ]);

        DB::table("tags")->insert([
            "id" => 1,
            "name" => "Panda in Action",
        ]);

        DB::table("tags")->insert([
            "id" => 2,
            "name" => "New Releases",
        ]);

        DB::table("tags")->insert([
            "id" => 3,
            "name" => "Adventure Anime",
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 1,
            "tag_id" => 1,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 2,
            "tag_id" => 1,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 3,
            "tag_id" => 1,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 4,
            "tag_id" => 1,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 3,
            "tag_id" => 2,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 4,
            "tag_id" => 2,
        ]);

        
    }
}
