<?php


namespace App\Traits;


trait OrderSendButtonTrait
{
    public function getBasketProductsQtyFromSession(): int
    {
        return count(basket()->all());
    }

}
