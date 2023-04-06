<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'product_id',
        'is_deal',
        'quantity',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product()
    {
        if ($this->is_deal) {
            return $this->belongsTo(Deal::class, 'product_id');
        } else {
            return $this->belongsTo(Item::class, 'product_id');
        }
    }
}
