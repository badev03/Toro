<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_attribute extends Model
{
    use HasFactory;
    protected $fillable = [
        "product_id",
        'attribute_id',
        'attribute_value_id',
    ];
}