<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    #Model->Factory
    use HasFactory;

    #AtributesTable
    protected $fillable = ['date_order','pay_day','discount','sent'];

    public function orderModel(){
        return $this->belongsTo(Customer::class);
    }
}
