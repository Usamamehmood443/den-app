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

        //This line adds dummy Food Categories
        //$this->call(FoodCategoriesTableSeeder::class);

        //This line adds 50 random data for restaurants
        // $this->call(RestaurantsTableSeeder::class);
    }
}
