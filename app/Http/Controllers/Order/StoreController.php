<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        dd($request->all());
        return back()->with('order_create.success', 'Заявка успешно отправлена!');
    }
}
