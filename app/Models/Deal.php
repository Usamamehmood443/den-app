<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Deal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'restaurant_id',
        'original_price',
        'discounted_price',
        'discount_percentage',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    // public function items()
    // {
    //     return $this->belongsToMany(Item::class);
    // }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'deal_item', 'deal_id', 'item_id');
    }
}
