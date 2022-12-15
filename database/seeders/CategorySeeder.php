<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_data = [[
            'name' => "Fantasy"
        ],[
            'name' => "Romance"
        ],[
            'name' => "Action"
        ]
    ];

    DB::table('categories')->insert($category_data);
    }
}
