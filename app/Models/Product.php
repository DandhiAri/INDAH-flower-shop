<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;
    protected $table = 'products';

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function kategori(){
        return $this->belongsTo(Category::class);
    }
}
