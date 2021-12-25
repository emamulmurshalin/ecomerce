<?php


namespace App\Http\Repository;


use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductRepository
{
    public $model;
    function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function storeProduct($data)
    {
        return $this->model->create($data);
    }
}
