<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable  = ['product_id', 'name', 'sku', 'size', 'quantity', 'price'];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
