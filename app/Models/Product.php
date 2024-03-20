<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=['description','price','stock','categories_id'];
    protected $cast = [
        'price' =>MoneyCast::class
    ];
    public function categories(){
        return $this->belongsTo(Category::class,'categories_id');
    }
}
