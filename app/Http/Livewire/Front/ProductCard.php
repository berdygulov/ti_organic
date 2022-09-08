<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class ProductCard extends Component
{
    public int $product_id;
    public string $title;
    public iterable $categories;
    public int $price;
    public bool $new;
    public int|null $code, $quantity, $discount;
    public string|null $image_url;

    public function mount($product_id, $title, $categories, $price, $code = null, $quantity = null, $discount = null, $new = true, $image_url = null)
    {

        $this->product_id = $product_id;
        $this->title = $title;
        $this->categories = $categories;
        $this->price = $price;
        $this->code = $code;
        $this->quantity = $quantity;
        $this->discount = $discount;
        $this->new = $new;
        $this->image_url = $image_url ?? '';
    }

    public function addToCart()
    {
        $this->emit('addToCart', $this->product_id, $this->image_url, $this->title, $this->price);
    }

    public function render()
    {
        return view('livewire.front.product-card');
    }
}
