<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book_category_id = [
            [
                'book_id' => 1,
                'category_id' => 1
            ],[
                'book_id' => 1,
                'category_id' => 3
            ], [
                'book_id' => 2,
                'category_id' => 1
            ], [
                'book_id' => 3,
                'category_id' => 1
            ], [
                'book_id' => 4,
                'category_id' => 1
            ], [
                'book_id' => 5,
                'category_id' => 2
            ],[
                'book_id' => 5,
                'category_id' => 3
            ], [
                'book_id' => 5,
                'category_id' => 1
            ],[
                'book_id' => 6,
                'category_id' => 2
            ],[
                'book_id' => 7,
                'category_id' => 2
            ], [
                'book_id' => 7,
                'category_id' => 3
            ],[
                'book_id' => 8,
                'category_id' => 3
            ],[
                'book_id' => 9,
                'category_id' => 3
            ],
        ];

        DB::table('book_category')->insert($book_category_id);
    }
}
