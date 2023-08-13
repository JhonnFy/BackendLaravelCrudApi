<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\image;

class app_tables extends Model
{
    use HasFactory;

    protected $fillable=['company_name','addres','phone_number','record'];

    public function images(){
        return $this->hasMany(image::class);
    }

}
