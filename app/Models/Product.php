<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "foto",
        "nama",
        "deskripsi",
        "harga",
        "stok",
        "kategori_id"
    ];

    public function kategori()
    {
        return $this->belongsTo(Category::class, 'kategori_id');
    }
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class, 'product_id');
    }
    public function terjual(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->orderProducts()->sum('jumlah'), 
            );
        }
}
