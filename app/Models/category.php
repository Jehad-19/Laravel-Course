<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'price' ];

    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
