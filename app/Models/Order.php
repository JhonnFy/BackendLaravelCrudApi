<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    #Model->Factory
    use HasFactory;

    #AtributesTable
    protected $fillable = [
        'date_order',
        'pay_day',
        'discount',
        'sent'
    ];

    #BelongsTo Customer_Orders
    public function customers(){
        return $this->belongsTo(Customer::class);
    }

    #OneToMany Orders_OrderedProduct
    public function orderedproducts(){
        return $this->hasMany(Orderedproduct::class);
    }

    public function products()
    {   
        return $this->belongsToMany(Product::class)->withTimestamps()->withPivot(["units"]);
    }
    
}
