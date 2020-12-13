<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'size',
        'price',
        'category_id',
        'quantity',
        'brand',
    ];

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }


    public function category()
    {
        return $this->hasOne('App\Category');
    }

    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
