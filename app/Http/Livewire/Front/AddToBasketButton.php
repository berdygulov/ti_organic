<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use Livewire\Component;

class AddToBasketButton extends Component
{
    public int $productId;
    public $qty = 1;
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

        session()->flash('product.add_to_cart.success', "Товар добавлен в корзину!");
    }

    public function render()
    {
        return view('livewire.front.add-to-basket-button');
    }
}
