<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class FooterNote extends Component
{
    public string $content = '';
    public int $product_id;

    protected $listeners = [
        'addedToCart' => 'addedToCart',
        'productQuantityChanged' => 'productQuantityChanged',
        'deletedFromCart' => 'deletedFromCart',
    ];

    public function deletedFromCart($quantity, $product_id)
    {
        if ($product_id === $this->product_id) {
            $this->content = '';
        }
    }

    public function productQuantityChanged($title, $quantity, $product_id)
    {
        $this->product_id = $product_id;
        $this->content = "Товар - $title - был добавлен в корзину. (количество в корзине - $quantity шт.)";
    }

    public function addedToCart($product_id, $image_url, $title)
    {
        $this->product_id = $product_id;
        $this->content = "Товар - $title - был добавлен в корзину. (количество в корзине - 1 шт.)";
    }

    public function render()
    {
        return view('livewire.front.footer-note');
    }
}
