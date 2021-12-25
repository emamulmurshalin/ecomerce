<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $data['productsReport'] = Product::withSum('sales', 'sales_quantity')->get();
        return view('reports.product-report', $data);
    }
}
