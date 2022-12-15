<?php

namespace Database\Seeders;

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

        $this->call(CategorySeeder::class);
        $this->call(PublishersSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(BookCategory::class);
        // \App\Models\User::factory(10)->create();
    }
}
