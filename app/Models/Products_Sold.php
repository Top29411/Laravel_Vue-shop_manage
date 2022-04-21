<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_Sold extends Model
{
    use HasFactory;
    protected $table = 'products_solds';
    protected $primaryKey = 'id';
    
    
}
