<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'value', 'price_variant', 'quantity','product_id'];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
