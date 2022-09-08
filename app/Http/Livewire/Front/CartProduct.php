<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class CartProduct extends Component
{
    public int $product_id;
    public string $title;
    public int $price;
    public string|null $image_url;
    public int $quantity;

    public function mount($product_id, $title, $price, $quantity, $image_url = null)
    {

        $this->product_id = $product_id;
        $this->title = $title;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->image_url = $image_url;
    }

    public function updatedFoo($value)

    {

        //

    }

    public function deleteProductFromCart()
    {
        $this->emit('deleteProductFromCart', $this->product_id);
    }

    public function render()
    {
        return view('livewire.front.cart-product');
    }
}
