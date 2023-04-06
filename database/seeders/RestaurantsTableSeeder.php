<?php

namespace Database\Seeders;

use App\Models\FoodCategory;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodCategories = FoodCategory::all();

        if ($foodCategories->isEmpty()) {
            $foodCategories = ['Breakfast', 'Lunch', 'Snacks', 'All'];
            foreach ($foodCategories as $category) {
                FoodCategory::create(['name' => $category]);
            }
            $foodCategories = FoodCategory::all();
        }

        for ($i = 1; $i <= 50; $i++) {
            $restaurant = Restaurant::create([
                'restaurant_name' => "Restaurant $i",
                'email' => "restaurant$i@example.com",
                'phone' => '1234567890',
                'company_registration_no' => "CRN$i",
                'zimra_bp_no' => "ZBP$i",
                'location_address_1' => "Address Line 1 - $i",
                'location_address_2' => "Address Line 2 - $i",
                'latitude' => -19.832+$i*0.001,
                'longitude' => 34.850+$i*0.001,
                'open_time' => '08:00:00',
                'close_time' => '22:00:00',
                'food_category_id' => $foodCategories->random()->id,
                'dine_in' => rand(0, 1),
                'service_type' => rand(0, 1) ? 'Self-Service' : 'Table-Service',
                'image_path' => 'images/restaurants/restaurant' . $i . '.jpg',
                'contact_person_name' => "John Doe $i",
                'contact_person_phone' => '1234567890',
                'contact_person_designation' => "Manager $i",
                'contact_person_email' => "manager$i@example.com",
            ]);
        }
    }
}
