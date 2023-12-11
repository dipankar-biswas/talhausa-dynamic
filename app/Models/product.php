<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function category(){
        return $this->beLongsTo(category::class);
    }

    public function neck(){
        return $this->beLongsTo(Neck::class);
    }

    public function color(){
        return $this->hasOne(ProductColor::class, "product_id");
    }

    public function colors(){
        return $this->hasMany(ProductColor::class, 'product_id', 'id');
    }
    
    public function sizes(){
        return $this->hasMany(ProductSize::class, 'product_id', 'id');
    }

}
