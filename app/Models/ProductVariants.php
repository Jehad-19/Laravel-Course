<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    protected $fillable = ['product_id', 'size', 'color', 'stock'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
