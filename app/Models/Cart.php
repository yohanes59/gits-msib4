<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    protected $fillable = [
        'produk_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'produk_id');
    }
}
