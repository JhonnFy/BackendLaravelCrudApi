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

    #HasMany OrderedProduct_Orders
    public function orders()
    {
        return $this->hasMany(Post::class);
    }

}
