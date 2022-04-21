<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'product_id'; 
    
    // public function store() {
    //     return $this->belongsTo(Store::class);
    // }

    // public function product_variants() {
    //     return $this->hasMany(Product_Variant::class);
    // }

}
