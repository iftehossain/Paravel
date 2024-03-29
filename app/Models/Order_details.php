<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;
    protected $guarded = [];
    function relation_product(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
