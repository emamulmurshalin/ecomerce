<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $data['productsReport'] = Product::pluck('name', 'id')->toArray();
        return view('reports.product-report');
    }
}
