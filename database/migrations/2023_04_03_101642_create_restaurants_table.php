<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('restaurant_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('company_registration_no')->unique();
            $table->string('zimra_bp_no')->unique();
            $table->string('location_address_1')->nullable();
            $table->string('location_address_2')->nullable();
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->time('open_time');
            $table->time('close_time');
            $table->unsignedBigInteger('food_category_id');
            $table->boolean('dine_in');
            $table->string('service_type');
            $table->string('image_path');
            $table->string('contact_person_name');
            $table->string('contact_person_phone');
            $table->string('contact_person_designation');
            $table->string('contact_person_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
