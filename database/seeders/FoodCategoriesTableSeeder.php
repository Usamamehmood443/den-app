<?php

namespace Database\Seeders;

use App\Models\FoodCategory;
use Illuminate\Database\Seeder;

class FoodCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodCategories = [
            'Breakfast',
            'Lunch',
            'Dinner',
            'Snacks',
            'Dessert',
            'All'
        ];

        foreach ($foodCategories as $category) {
            FoodCategory::create([
                'name' => $category
            ]);
        }
    }
}
