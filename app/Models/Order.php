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
        'shipment_city',
        'customer_id'
    ];

 
    #BelongsTo Customer_Orders
    public function customers(){
        return $this->belongsTo(Customer::class);
    }

    /*
    |--------------------------------------------------------------------------
    | withPivot
|   --------------------------------------------------------------------------
    Aquellos otros atributos que se quieren acceder desde la tabla pivot
|   */
    public function products(){
        return $this->belongsToMany('\App\Product','orders_products')
            ->withPivot('products_id','units');
    }
    
}
