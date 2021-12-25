<?php


namespace App\Http\Repository;


use App\Models\Product;
use App\Models\Sales;

class SalesRepository
{
    public $model;
    function __construct(Sales $product)
    {
        $this->model = $product;
    }

    public function storeSales($data)
    {
        $productId = $data['product_id'];
        $productQuantity = $data['sales_quantity'];
        Product::find($productId)->decrement('available_quantity',$productQuantity);
        return $this->model->create($data);
    }
}
