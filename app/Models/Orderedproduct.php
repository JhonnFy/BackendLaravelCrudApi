<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderedproduct extends Model
{
    use HasFactory;

    #AtributesTable
    protected $fillable = [
        'order_id',
        'product_id',
        'units'
    ];

    #BelongsTo Orders_OrderedProduct
    public function orders(){
        return $this->belongsTo(Order::class);
    }

    #BelongsTo Products_OrderedProduct
    public function products(){
        return $this->belongsTo(Product::class);
    }

}
