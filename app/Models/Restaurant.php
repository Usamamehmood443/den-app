<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RestaurantListingTag;
use App\Models\RestaurantReview;
use App\Models\RestaurantRating;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_name',
        'email',
        'phone',
        'company_registration_no',
        'zimra_bp_no',
        'location_address_1',
        'location_address_2',
        'latitude',
        'longitude',
        'open_time',
        'close_time',
        'food_category_id',
        'dine_in',
        'service_type',
        'image_path',
        'contact_person_name',
        'contact_person_phone',
        'contact_person_designation',
        'contact_person_email',
    ];

    public function tags()
    {
        return $this->hasMany(RestaurantListingTag::class);
    }

    public function reviews()
    {
        return $this->hasMany(RestaurantReview::class);
    }

    public function ratings()
    {
        return $this->hasMany(RestaurantRating::class);
    }
}
