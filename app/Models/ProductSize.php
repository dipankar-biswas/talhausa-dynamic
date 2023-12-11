<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    public function sizes(){
        return $this->belongsTo(Size::class, 'size_id', 'id');
    }

    public function size_name(){
        return $this->belongsTo(Size::class, 'size_id', 'id')->select('id','name');
    }

    public function color_name(){
        return $this->belongsTo(color::class, 'product_color_id', 'id')->select('id','name','code');
    }
}
