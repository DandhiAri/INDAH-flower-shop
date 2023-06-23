<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = true;
    protected $table = 'cards';
    public function id(){
        return Cart::get()->id;
    }
}
