<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function front($product_id)
    {
        $product = Product::find($product_id);
        $products = Product::whereNot('id', $product_id)
            ->orderBy('created_at', 'asc')
            ->limit(10)
            ->get();
        return view('front.product.show', compact('product', 'products'));
    }
}
