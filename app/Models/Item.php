<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'order_id',
        'product_id',
        'product_title',
        'product_price',
        'quantity',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
