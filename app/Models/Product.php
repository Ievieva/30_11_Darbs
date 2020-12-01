<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'size', 'price', 'weight'];

    public function deliveries()
    {
        return $this->hasMany(
            Delivery::class,
            'size',
            'size'
        );
    }

    public function getPrice()
    {
        return '$' . number_format($this->price/100, 2);
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getWeight()
    {
        return number_format($this->weight/1000, 2) . ' kg';
    }
}
