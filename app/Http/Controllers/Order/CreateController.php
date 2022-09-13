<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{

    public function confirm()
    {

        $basket = basket()->all();
//        dd($basket);
        return view('front.order.create.confirm');
    }

    public function send()
    {
        return view('front.order.create.send');
    }
}
