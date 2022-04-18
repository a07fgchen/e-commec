<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $hidden = ['created_at','updated_at'];

    public function productDetails()
    {
        return $this->belongsTo(ProductDetail::class,'product_detail_id','id');
    }

}
