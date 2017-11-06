<?php

namespace App;

use App\Entities\ProductType;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'quantity', 'unit_price', 'state', 'details', 'product_types_id'];

    public function productType(){
        return $this->belongsTo(ProductType::class);
    }
}
