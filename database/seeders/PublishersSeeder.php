<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books_data = [
            [
            'name' => "Bloomsbury (UK)",
            'address' => "50 Bedford Square, London, WC1B 3DP",
            'phone' => "+44 (0)20 7631 5600.",
            'email' => "publicityusa@bloomsbury.com",
            'image' => "BloomsburyIcon.png"
            ],[
            'name' => "Atria Books",
            'address' => "New York City, United States",
            'phone' => "(212) 698-7566",
            'email' => "AtriaPublicity@SimonandSchuster.com",
            'image' => "AtriaBooksIcon.png"
            ],[
            'name' => "Simon & Schuster",
            'address' => "1230 Avenue of the Americas, New York, NY, 10020-1513, USA",
            'phone' => "(800) 223-2336",
            'email' => "SSPublicity@simonandschuster.com",
            'image' => "Simon_and_Schuster.png"
            ]
    ];

        DB::table('publishers')->insert($books_data);

    }
}
