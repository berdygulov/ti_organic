<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class CartIcon extends Component
{
    public int $cart_items = 0;

    protected $listeners = [
        'addedToCart' => 'addedToCart',
        'deletedFromCart' => 'deletedFromCart',
    ];

    public function addedToCart($product_id, $image_url, $title, $current_cart_items)
    {
        $this->cart_items = $current_cart_items;
    }

    public function deletedFromCart($current_cart_items)
    {
        $this->cart_items = $current_cart_items;
    }

    public function render()
    {
        return view('livewire.front.cart-icon');
    }
}
