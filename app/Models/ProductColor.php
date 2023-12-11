<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;

    public function size(){
        return $this->hasMany(ProductSize::class, "product_color_id");
    }

    public function color_name(){
        return $this->belongsTo(color::class, 'color_id', 'id')->select('id','name','code');
    }
}
