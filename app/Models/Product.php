<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    #AtributesTable
    protected $fillable = [
        'section',
        'name',
        'price',
        'date',
        'imported_country'
    ];

    #OneToMany Product_Orderedproduct
    // public function orderedproducts(){
    //     return $this->hasMany(Orderedproduct::class);
    // }


    public function Orders(){
        return $this->belongsToMany('\App\Order','orders_products')
             ->withPivot('orders_id'); 
    } 

}
