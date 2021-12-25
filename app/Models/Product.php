<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $appends= ['total_sales'];
    protected $fillable = [
        'name',
        'buy_price',
        'selling_price',
        'available_quantity',
        ];

    public function sales()
    {
        return $this->hasMany(Sales::class);
    }

    public function getTotalSalesAttribute()
    {
        return $this->sales()->sum('sales_quantity');
    }
}
