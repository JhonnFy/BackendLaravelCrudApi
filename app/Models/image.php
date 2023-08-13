<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\app_tables;

class image extends Model
{
    use HasFactory;
    
    protected function app_tables(){
        return $this->belongsTo(customers::class);
    }

    
}

