<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;
use App\Models\Customer;

class RestaurantRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'customer_id',
        'rating'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
