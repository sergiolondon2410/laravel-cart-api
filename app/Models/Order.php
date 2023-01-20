<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'email',
        'address',
        'state',
        'city',
        'zipcode',
        'total'
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
