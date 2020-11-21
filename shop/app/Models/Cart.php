<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'count',
    ];


    public function product()
    {
        return $this->hasMany('App\Product');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
