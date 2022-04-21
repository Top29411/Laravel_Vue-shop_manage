<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'store';
    protected $primaryKey = 'id'; 

    // public function products() {
    //     return $this->hasMany(Product::class);
    // }
}
