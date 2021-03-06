<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $guarded = [];
    public function product(){
        return $this->hasOne(Product::class);
    }
}
