<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'sales_quantity'
    ];

    public function products()
    {
        $this->belongsTo(Product::class);
    }
}
