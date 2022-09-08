<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexPage()
    {
        $products = Product::with(['thumbnail', 'categories'])->where('status', true)->limit(6)->get();
        $categories = Category::with(['thumbnail'])->get();

        return view('front.index', compact('products', 'categories'));
    }
}
