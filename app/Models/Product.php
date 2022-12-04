<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'status',
    ];

    public function carts()
    {
        return $this->belongsToMany(Cart::class)->withPivot('quantity'); //withPivot so we can get the attributes from the pivot table
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity'); 
    }
}