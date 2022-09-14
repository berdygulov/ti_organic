<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Mail\Order;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function __invoke(StoreOrderRequest $request)
    {
        Mail::to('tlegenbayangali@yandex.kz')->send(new Order($request->validated()));

        return back()->with('order_create.success', 'Заявка успешно отправлена!');
    }
}
