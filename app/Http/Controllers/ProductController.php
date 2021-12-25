<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $service;
    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        return view('products.create-product');
    }

    public function store(ProductRequest $request)
    {
        $data = [
            'name' => $request->name,
            'buy_price' => $request->buy_price,
            'selling_price' => $request->selling_price,
            'available_quantity' => $request->available_quantity,
        ];
        $save = $this->service->store($data);
        if ($save){
            return redirect('/products/create');
        }

    }
}
