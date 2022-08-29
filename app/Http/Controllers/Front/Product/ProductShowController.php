<?php

namespace App\Http\Controllers\Front\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductShowController extends Controller
{
    public function __invoke ()
    {
        return view('front.product.show');
    }
}
