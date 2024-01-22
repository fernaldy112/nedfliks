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
            "username" => "po",
            "email" => "po@gmail.com",
            "password" => "$2y$10\$yinNZvxScf3c8Bw/YWZcyOYC.QEFu0aLbnedihsKCBXzi7YGebG/i", // tailung123
            "profile_picture_url" => "img/profile-picture.png",
        ]);

        DB::table("shows")->insert([
            "id" => 1,
            "title" => "Kungfu Panda",
            "description" => "To everyone's surprise, including his own, Po, an overweight, clumsy panda, is chosen as protector of the Valley of Peace. His suitability will soon be tested as the valley's arch-enemy is on his way.",
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
            "description" => "Po and his friends fight to stop a peacock villain from conquering China with a deadly new weapon, but first the Dragon Warrior must come to terms with his past.",
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
            "description" => "Continuing his 'legendary adventures of awesomeness', Po must face two hugely epic, but different threats: one supernatural and the other a little closer to home.",
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
            "description" => "A team of narcotics detectives goes undercover in a fried chicken joint to stake out an organized crime gang. But things take an unexpected turn when the detectives' chicken recipe suddenly transforms the rundown restaurant into the hottest eatery in town.",
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
            "description" => "When an English man is accused of murdering his Thai in-laws, his wife is the only witness that stands between guilt and freedom.",
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
            "description" => "A married couple stages their divorce in order to encourage their estranged adult children to return to their hometown.",
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
            "description" => "In this sequel to the hit comedy drama, Erwin and Natalie must navigate a series of challenges after they decide to get married.",
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
            "description" => "Ina, whose ex-boyfriend runs off, leaving her in debt, manages to catch on a cunning con artist who tries to con her. But instead of turning him to the police, she hires this con artist to swindle her ex-boyfriend to get revenge.",
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
            "description" => "Set in the year 2092 and follows the crew of a space junk collector ship called The Victory. When they discover a humanoid robot named Dorothy that's known to be a weapon of mass destruction, they get involved in a risky business deal.",
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
            "description" => "A true-crime enthusiast and a washed up cop facing demotion launch a joint murder investigation to help a mutual friend who is wrongfully charged with murder.",
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
            "description" => "A chaotic love story of a man and a girl who keep falling for each other in the wrong place at the wrong time over and over as if God enjoys playing tricks on them and won't easily give them a break to be together.",
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
            "description" => "Adapted from Japanese manga series 'Itazura na Kiss', about a teen girl who falls in love with her fellow senior since their first day of high school.",
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
            "description" => "Taking matters into their own hands, a former detective and a passionate rookie uncover a crime ring profiting off digital sex crimes against women.",
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
            "description" => "With hard work and dedication on lock, a group of homeless men trains to compete in the Homeless World Cup, despite a cranky coach.",
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
            "description" => "Marinette and Adrien, two normal teens, transform into superheroes Ladybug and Cat Noir when an evil threatens their city.",
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
            "description" => "After his wife is forced to give up 40 years of her life as payment for an insurance debt, a man desperately searches for a way to get them back.",
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
            "description" => "Helen signs up for a wilderness survival course, a year after getting divorced. She discovers through this experience that sometimes, you have to get really lost in order to find yourself.",
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
            "description" => "After barely surviving his grievous wounds from his mission in Dhaka, Bangladesh, Tyler Rake is back, and his team is ready to take on their next mission.",
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
            "description" => "While fleeing from dangerous assailants, an assassin comes out of hiding to protect the daughter she left earlier in life.",
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
            "description" => "A series of eerie events thrusts an unlikely trio onto the trail of a nefarious government conspiracy in this pulpy mystery caper.",
            "release_year" => "2023",
            "maturity_rating" => "18+",
            "number_of_seasons" => 1,
            "hours" => 1,
            "minutes" => 59,
            "type" => "MOVIE",
            "poster_url" => "img/posters/they-cloned-tyrone.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 21,
            "title" => "Ranking of Kings",
            "description" => "The people of the kingdom look down on the young Prince Bojji, who can neither hear nor speak. They call him 'The Useless Prince' while jeering at his supposed foolishness.",
            "release_year" => "2023",
            "maturity_rating" => "16+",
            "number_of_seasons" => 2,
            "hours" => 0,
            "minutes" => 0,
            "type" => "TV_SHOW",
            "poster_url" => "img/posters/ranking-of-kings.jpeg",
        ]);

        DB::table("shows")->insert([
            "id" => 22,
            "title" => "BASTARD!! -Heavy Metal, Dark Fantasy-",
            "description" => "When evil forces threaten to resurrect Anthrasax, the God of Destruction, the Kingdom of Meta-llicana calls on a volatile dark wizard for help.",
            "release_year" => "2023",
            "maturity_rating" => "18+",
            "number_of_seasons" => 2,
            "hours" => 0,
            "minutes" => 0,
            "type" => "TV_SHOW",
            "poster_url" => "img/posters/bastard.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 23,
            "title" => "Hunter X Hunter",
            "description" => "Gon Freecss aspires to become a Hunter, an exceptional being capable of greatness. With his friends and his potential, he seeks out his father, who left him when he was younger.",
            "release_year" => "2011",
            "maturity_rating" => "16+",
            "number_of_seasons" => 6,
            "hours" => 0,
            "minutes" => 0,
            "type" => "TV_SHOW",
            "poster_url" => "img/posters/hunter-x-hunter.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 24,
            "title" => "Reincarnated as a Sword",
            "description" => "A human reincarnated as a sword is picked up by an orphaned cat-girl and becomes her protector, devoting to her quest to evolve.",
            "release_year" => "2022",
            "maturity_rating" => "16+",
            "number_of_seasons" => 1,
            "hours" => 0,
            "minutes" => 0,
            "type" => "TV_SHOW",
            "poster_url" => "img/posters/reincarnated-as-a-sword.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 25,
            "title" => "Sword Art Online",
            "description" => "In the year 2022, thousands of people get trapped in a new virtual MMORPG and the lone wolf player, Kirito, works to escape.",
            "release_year" => "2012",
            "maturity_rating" => "18+",
            "number_of_seasons" => 2,
            "hours" => 0,
            "minutes" => 0,
            "type" => "TV_SHOW",
            "poster_url" => "img/posters/sword-art-online.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 26,
            "title" => "Naruto",
            "description" => "Naruto Uzumaki, a mischievous adolescent ninja, struggles as he searches for recognition and dreams of becoming the Hokage, the village's leader and strongest ninja.",
            "release_year" => "2002",
            "maturity_rating" => "16+",
            "number_of_seasons" => 9,
            "hours" => 0,
            "minutes" => 0,
            "type" => "TV_SHOW",
            "poster_url" => "img/posters/naruto.jpeg",
        ]);

        DB::table("shows")->insert([
            "id" => 27,
            "title" => "The Seven Deadly Sins",
            "description" => "The story of the Seven Deadly Sins, a group of warriors who were wrongly accused of a crime they didn't commit and went on a quest to vindicate themselves.",
            "release_year" => "2014",
            "maturity_rating" => "16+",
            "number_of_seasons" => 4,
            "hours" => 0,
            "minutes" => 0,
            "type" => "TV_SHOW",
            "poster_url" => "img/posters/the-seven-deadly-sins.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 28,
            "title" => "Dr. Stone",
            "description" => "Awakened into a world where humanity has been petrified, scientific genius Senku and his brawny friend Taiju use their skills to rebuild civilization.",
            "release_year" => "2019",
            "maturity_rating" => "13+",
            "number_of_seasons" => 3,
            "hours" => 0,
            "minutes" => 0,
            "type" => "TV_SHOW",
            "poster_url" => "img/posters/dr-stone.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 29,
            "title" => "The Rising of the Shield Hero",
            "description" => "A gamer is magically summoned into a parallel universe, where he is chosen as one of four heroes destined to save the world from its prophesied doom.",
            "release_year" => "2019",
            "maturity_rating" => "16+",
            "number_of_seasons" => 2,
            "hours" => 0,
            "minutes" => 0,
            "type" => "TV_SHOW",
            "poster_url" => "img/posters/shield-hero.jpg",
        ]);

        DB::table("shows")->insert([
            "id" => 30,
            "title" => "My Hero Academia",
            "description" => "A superhero-admiring boy without any powers enrolls in a prestigious hero academy and learns what it really means to be a hero.",
            "release_year" => "2016",
            "maturity_rating" => "16+",
            "number_of_seasons" => 6,
            "hours" => 0,
            "minutes" => 0,
            "type" => "TV_SHOW",
            "poster_url" => "img/posters/my-hero-academia.jpg",
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

        DB::table("show_tags")->insert([
            "show_id" => 21,
            "tag_id" => 2,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 21,
            "tag_id" => 3,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 22,
            "tag_id" => 2,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 22,
            "tag_id" => 3,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 23,
            "tag_id" => 3,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 24,
            "tag_id" => 3,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 25,
            "tag_id" => 3,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 26,
            "tag_id" => 3,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 27,
            "tag_id" => 3,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 28,
            "tag_id" => 3,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 29,
            "tag_id" => 3,
        ]);

        DB::table("show_tags")->insert([
            "show_id" => 30,
            "tag_id" => 3,
        ]);

        DB::table("my_lists")->insert([
            "user_id" => 1,
            "show_id" => 2,
        ]);

        DB::table("my_lists")->insert([
            "user_id" => 1,
            "show_id" => 4,
        ]);

        DB::table("my_lists")->insert([
            "user_id" => 1,
            "show_id" => 6,
        ]);

        DB::table("my_lists")->insert([
            "user_id" => 1,
            "show_id" => 8,
        ]);

        DB::table("my_lists")->insert([
            "user_id" => 1,
            "show_id" => 10,
        ]);

        DB::table("my_lists")->insert([
            "user_id" => 1,
            "show_id" => 12,
        ]);

        DB::table("my_lists")->insert([
            "user_id" => 1,
            "show_id" => 14,
        ]);

        DB::table("my_lists")->insert([
            "user_id" => 1,
            "show_id" => 16,
        ]);

        DB::table("my_lists")->insert([
            "user_id" => 1,
            "show_id" => 18,
        ]);

        DB::table("my_lists")->insert([
            "user_id" => 1,
            "show_id" => 20,
        ]);
        
    }
}
