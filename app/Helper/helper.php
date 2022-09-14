<?php

use App\Models\Product;
use Illuminate\Support\Collection;

function currencyFormat($str): string
{
    return number_format($str, 0, ',', ' ') . " ₸";
}

function discountPercentage($old_price, $new_price): string
{
    if ($old_price > $new_price) {
        return '-' . ceil(100 - (($new_price * 100) / $old_price)) . '%';
    } elseif ($old_price < $new_price) {
        return '+' . (ceil(100 - (($new_price * 100) / $old_price)) * -1) . '%';
    } else {
        return '0%';
    }
}

function basket()
{
    return app(\App\Repositories\Contracts\BasketRepositoryContract::class);
}

function getProductsFromSession(array $basket): Collection
{
    if (count($basket) === 0) {
        return new Collection();
    } else {
        return Product::whereIn('id', array_keys($basket))
            ->get()
            ->map(function (Product $product) use ($basket) {
                return (object)[
                    'id' => $product->id,
                    'url' => $product->thumbnail?->url,
                    'title' => $product->title,
                    'price' => $product->price,
                    'qty' => $basket[$product->id],
                    'total' => $product->price * $basket[$product->id],
                ];
            });
    }
}
