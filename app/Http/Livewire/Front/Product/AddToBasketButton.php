<?php

namespace App\Http\Livewire\Front\Product;

use App\Models\Product;
use Livewire\Component;

class AddToBasketButton extends Component
{
    public int $productId;
    public int $qty = 1;
    public $currentQty = 0;

    public function mount(int $productId): void
    {
        $this->productId = $productId;
    }

    public function hydrate(): void
    {
        $this->currentQty = basket()->getCurrentQty($this->productId);
    }

    /* Add Product ti the basket */
    public function add(): void
    {
        $qty = $this->currentQty + (int)$this->qty;
        if ($qty < 0) {
            return;
        }
        basket()->add($this->productId, $qty);
        $this->emit('basketUpdated');

        $productTitle = Product::find($this->productId)->title;

        session()->flash('product.add_to_cart.success', "Товар $productTitle в количестве $this->qty добавлен в корзину!");
    }

    /* Increase counter */
    public function increase(): void
    {
        $this->qty += 1;
    }

    public function render()
    {
        return view('livewire.front.product.add-to-basket-button');
    }
}
