<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_variant extends Model
{
    use HasFactory;

    protected $fillable = [
        "product_id",
        "variant_name",
        "price",
        "quantity",


    ];
}
