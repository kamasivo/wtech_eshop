<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'user_id',
        'product_id',
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
