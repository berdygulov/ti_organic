<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class BasketProducts extends Component
{
    public array $basket = [];
    public array $products = [];
    public int $total = 0;

    protected $listeners = [
        'basketUpdated' => 'booted',
    ];

    public function booted(): void
    {
        /* Using basket helper from app/helper/helper.php */
        $this->basket = basket()->all();
        $this->products = tap($this->products(),
            fn(Collection $products) => $this->total = $products->sum('total'))->toArray();

    }

    private function products(): Collection
    {
        /* Using getProductsFromSession helper from app/helper/helper.php */

        return getProductsFromSession($this->basket);
    }

    /* Remove from the basket */
    public function remove(int $id): void
    {
        basket()->remove($id);
        $this->update();
    }

    /* Increase product quantity  */
    public function increase(int $id): void
    {
        basket()->add($id, $this->basket[$id] + 1);
        $this->update();
    }

    /* Update product quantity  */
    public function change(int $id, $qty): void
    {
        basket()->add($id, (int)$qty);
        $this->update();
    }

    /* Update the basket */
    public function update(): void
    {
        $this->emit('basketUpdated');
    }

    public function render()
    {
        return view('livewire.front.basket-products');
    }
}
