<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function front(Request $request)
    {
        $products = Product::with(['thumbnail', 'categories'])->where('status', true)->get();
        return view('front.product.index', compact('products'));
    }
}
