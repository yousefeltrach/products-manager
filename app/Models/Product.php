<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
       'name',
       'description',
       'quantity',
       'price',
       'image',
       'status',
       'category_id'
    
    ];
    public function products(){
        return $this->belongsTo(Category::class);
    }
}