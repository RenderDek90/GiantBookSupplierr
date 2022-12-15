<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $book_data = [

            // BloomsBury
            [
                'title' => "Harry Potter and the Philosopher's Stone",
                'synopsis' => "Adaptation of the first of J.K. Rowling's popular children's novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth about his parents' mysterious deaths.",
                'year' => "1997",
                'author' => "J.K Rowling",
                'publisher_id' => 1,
                'image' => "PhilospherStone.jpg"
            ],[
                'title' => "Harry Potter and the Order Of The Phoenix",
                'synopsis' => "Adaptation of the first of J.K. Rowling's popular children's novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth about his parents' mysterious deaths.",
                'year' => "1997",
                'author' => "J.K Rowling",
                'publisher_id' => 1,
                'image' => "OrderOfPhoenix.jpg"
            ],[
                'title' => "Harry Potter and the Half Blood Prince",
                'synopsis' => "Adaptation of the first of J.K. Rowling's popular children's novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth about his parents' mysterious deaths.",
                'year' => "1997",
                'author' => "J.K Rowling",
                'publisher_id' => 1,
                'image' => "HalfBloodPrince.jpg"
            ],[
                'title' => "Harry Potter and the Deathly Hallows",
                'synopsis' => "Adaptation of the first of J.K. Rowling's popular children's novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth about his parents' mysterious deaths.",
                'year' => "1997",
                'author' => "J.K Rowling",
                'publisher_id' => 1,
                'image' => "DeathlyHallows.jpg"
            ],

            // Atria Books
            [
                'title' => "Ugly Love",
                'synopsis' => "When Tate Collins meets airline pilot Miles Archer, she doesn't think it's love at first sight. They wouldn't even go so far as to consider themselves friends. The only thing Tate and Miles have in common is an undeniable mutual attraction.",
                'year' => "2014",
                'author' => "Colleen Hoover",
                'publisher_id' => 2,
                'image' => "UglyLove.jpg"
            ],[
                'title' => "It Ends with Us",
                'synopsis' => "It Ends with Us is a book that follows a girl named Lily who has just moved and is ready to start her life after college. Lily then meets a guy named Ryle and she falls for him. As she is developing feelings for Ryle, Atlas, her first love, reappears and challenges the relationship between Lily and Ryle.",
                'year' => "2016",
                'author' => "Colleen Hoover",
                'publisher_id' => 2,
                'image' => "ItEndsWithUs.png"
            ],[
                'title' => "Reminders of Him",
                'synopsis' => "A troubled young mother yearns for a shot at redemption in this heartbreaking yet hopeful story from #1 New York Times bestselling author Colleen Hoover. After serving five years in prison for a tragic mistake, Kenna Rowan returns to the town where it all went wrong, hoping to reunite with her four-year-old daughter.",
                'year' => "2022",
                'author' => "Colleen Hoover",
                'publisher_id' => 2,
                'image' => "RemindersOfHim.jpg"
            ],
            // Simon And Schuster
            [
                'title' => "Jack Reacher : Die Trying",
                'synopsis' => "When a woman is kidnapped off a Chicago street in broad daylight, Jack Reacher's in the wrong place at the wrong time. He's kidnapped with her. Chained together and racing across America toward an unknown destination, they're at the mercy of a group of men demanding an impossible ransom.",
                'year' => "1998",
                'author' => "Lee Child",
                'publisher_id' => 3,
                'image' => "DieTrying.jpg"
            ], [
                'title' => "Jack Reacher : No Plan B",
                'synopsis' => "2022. In Gerrardsville, Colorado, a woman dies under the wheels of a moving bus. The death is ruled a suicide. But Jack Reacher saw what really happened: A man in a gray hoodie and jeans, moving stealthily, pushed the victim to her demise—before swiftly grabbing the dead woman's purse and strolling away.",
                'year' => "2022",
                'author' => "Lee Child",
                'publisher_id' => 3,
                'image' => "JackReacher.jpg"
            ]
            ];

        DB::table('books')->insert($book_data);
    }
}
