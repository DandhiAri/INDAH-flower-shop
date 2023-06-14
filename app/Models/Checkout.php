<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = true;
    protected $table = 'checkouts';

    public function user(){
        return $this->belongsTo(Checkout::class);
    }
    public function payment(){
        return $this->hasMany(Checkout::class);
    }
    public function checkout(){
        return $this->hasMany(Checkout::class);
    }
}
