<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    #Model->factory
    use HasFactory;

    #AtributesTable
    protected $fillable = ['company_name', 'addres_email', 'phone_number'];

    public function customerModel(){
        return $this->hasMany(Order::class);
    }
}
