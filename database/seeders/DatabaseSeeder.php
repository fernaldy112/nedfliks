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
            "maturity_rating" => "7+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 32,
            "type" => "MOVIE",
            "poster_url" => "img/posters/kungfu-panda-1.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 2,
            "title" => "Kungfu Panda 2",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2011",
            "maturity_rating" => "7+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 32,
            "type" => "MOVIE",
            "poster_url" => "img/posters/kungfu-panda-2.jpg",
        ]);
        
        DB::table("shows")->insert([
            "id" => 3,
            "title" => "Kungfu Panda 3",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2016",
            "maturity_rating" => "7+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 35,
            "type" => "MOVIE",
            "poster_url" => "img/posters/kungfu-panda-3.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 4,
            "title" => "Extreme Job",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2019",
            "maturity_rating" => "16+",
            "number_of_seasons" => 1,
            "hours" => 2,
            "minutes" => 0,
            "type" => "MOVIE",
            "poster_url" => "img/posters/extreme-job.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 5,
            "title" => "The Murderer",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2023",
            "maturity_rating" => "18+",
            "number_of_seasons" => 1,
            "hours" => 2,
            "minutes" => 0,
            "type" => "MOVIE",
            "poster_url" => "img/posters/the-murderer.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 6,
            "title" => "Missing Home",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2022",
            "maturity_rating" => "10+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 53,
            "type" => "MOVIE",
            "poster_url" => "img/posters/missing-home.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 7,
            "title" => "Check the Store Next Door 2",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2022",
            "maturity_rating" => "13+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 52,
            "type" => "MOVIE",
            "poster_url" => "img/posters/check-the-store-next-door-2.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 8,
            "title" => "The Con-Heartist",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2020",
            "maturity_rating" => "13+",
            "number_of_seasons" => 1,
            "hours" => 2,
            "minutes" => 7,
            "type" => "MOVIE",
            "poster_url" => "img/posters/the-con-heartist.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 9,
            "title" => "Space Sweepers",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2021",
            "maturity_rating" => "18+",
            "number_of_seasons" => 1,
            "hours" => 2,
            "minutes" => 16,
            "type" => "MOVIE",
            "poster_url" => "img/posters/space-sweepers.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 10,
            "title" => "The Accidental Detective",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2015",
            "maturity_rating" => "16+",
            "number_of_seasons" => 1,
            "hours" => 2,
            "minutes" => 0,
            "type" => "MOVIE",
            "poster_url" => "img/posters/the-accidental-detective.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 11,
            "title" => "OMG! Oh My Girl",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2022",
            "maturity_rating" => "18+",
            "number_of_seasons" => 1,
            "hours" => 2,
            "minutes" => 4,
            "type" => "MOVIE",
            "poster_url" => "img/posters/omg-oh-my-girl.jpeg",
        ]);

        DB::table("shows")->insert([
            "id" => 12,
            "title" => "Fall in Love at First Kiss",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2019",
            "maturity_rating" => "13+",
            "number_of_seasons" => 1,
            "hours" => 2,
            "minutes" => 2,
            "type" => "MOVIE",
            "poster_url" => "img/posters/fall-in-love-at-first-kiss.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 13,
            "title" => "Miss & Mrs. Cops",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2019",
            "maturity_rating" => "16+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 47,
            "type" => "MOVIE",
            "poster_url" => "img/posters/miss-and-mrs-cops.jpeg",
        ]);

        DB::table("shows")->insert([
            "id" => 14,
            "title" => "Dream",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2023",
            "maturity_rating" => "18+",
            "number_of_seasons" => 1,
            "hours" => 2,
            "minutes" => 7,
            "type" => "MOVIE",
            "poster_url" => "img/posters/dream.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 15,
            "title" => "Miraculous: Ladybug & Cat Noir, The Movie",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2023",
            "maturity_rating" => "7+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 42,
            "type" => "MOVIE",
            "poster_url" => "img/posters/miraculous.jpeg",
        ]);

        DB::table("shows")->insert([
            "id" => 16,
            "title" => "Paradise",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2023",
            "maturity_rating" => "18+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 58,
            "type" => "MOVIE",
            "poster_url" => "img/posters/paradise.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 17,
            "title" => "Happiness for Beginners",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2023",
            "maturity_rating" => "18+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 43,
            "type" => "MOVIE",
            "poster_url" => "img/posters/happiness-for-beginners.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 18,
            "title" => "Extraction 2",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2023",
            "maturity_rating" => "18+",
            "number_of_seasons" => 1,
            "hours" => 2,
            "minutes" => 3,
            "type" => "MOVIE",
            "poster_url" => "img/posters/extraction-2.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 19,
            "title" => "The Mother",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2023",
            "maturity_rating" => "16+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 57,
            "type" => "MOVIE",
            "poster_url" => "img/posters/the-mother.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 20,
            "title" => "They Cloned Tyrone",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione, velit aliquam voluptatem reiciendis natus beatae quas debitis tenetur error at excepturi, aperiam hic commodi, eum modi cumque qui provident!",
            "release_year" => "2023",
            "maturity_rating" => "18+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 59,
            "type" => "MOVIE",
            "poster_url" => "img/posters/they-cloned-tyrone.jpg",
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

        DB::table("tags")->insert([
            "id" => 4,
            "name" => "Asian Comedies",
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
            "tag_id" => 4,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 5,
            "tag_id" => 2,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 5,
            "tag_id" => 4,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 6,
            "tag_id" => 4,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 7,
            "tag_id" => 4,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 8,
            "tag_id" => 4,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 9,
            "tag_id" => 4,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 10,
            "tag_id" => 4,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 11,
            "tag_id" => 4,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 12,
            "tag_id" => 4,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 13,
            "tag_id" => 4,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 14,
            "tag_id" => 2,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 15,
            "tag_id" => 2,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 16,
            "tag_id" => 2,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 17,
            "tag_id" => 2,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 18,
            "tag_id" => 2,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 19,
            "tag_id" => 2,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 20,
            "tag_id" => 2,
        ]);

        
    }
}
