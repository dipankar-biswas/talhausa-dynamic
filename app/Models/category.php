<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function childrenCategories(){
        return $this->hasMany(category::class, 'parentid')->with('categories');
    }

    public function categories(){
        return $this->hasMany(category::class, 'parentid');
    }


}
