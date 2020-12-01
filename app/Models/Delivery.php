<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'size', 'price'];

   /* public function deliveries()
    {
        return $this->hasMany(
            Product::class,
            'size',
            'size'
        );
    }*/

    public function getPrice()
    {
        return '$' . $this->price/100;
    }

}
