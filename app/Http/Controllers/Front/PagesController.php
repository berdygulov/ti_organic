<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexPage ()
    {
        $products = Product::where('status', true)->limit(6)->get();

        return view('front.index', compact('products'));
    }
}
