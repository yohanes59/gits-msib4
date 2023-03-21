<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'kategori_id',
        'nama_produk',
        'deskripsi',
        'harga'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'kategori_id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }
}
