<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Variant extends Model
{
    use HasFactory;
    protected $table = 'product_variants';
    protected $primaryKey = 'variant_id';
    
    // public function product_variant() {
    //     return $this->belongsTo(Product::class);
    // }
    
}
