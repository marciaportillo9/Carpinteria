<?php

namespace App\Entities;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $fillable = ['name', 'details'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    //belongtoMany para muchos a muchos
}
