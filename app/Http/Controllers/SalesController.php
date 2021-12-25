<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesRequest;
use App\Http\Services\SalesService;
use App\Models\Product;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public $service;
    public function __construct(SalesService $service)
    {
        $this->service = $service;
    }
    public function create()
    {
        $data['products'] = Product::pluck('name', 'id')->toArray();
        return view('sales.sales-product', $data);
    }

    public function store(SalesRequest $request)
    {
        $data = [
            'product_id' => $request->product_id,
            'sales_quantity' => $request->sales_quantity
        ];
        $save = $this->service->store($data);
        if ($save){
            return redirect('/products/sales');
        }
    }
}
