<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class BasketTotalAmount extends Component
{

    public int $total = 0;

    protected $listeners = [
        'basketUpdated' => 'booted',
    ];

    public function booted(): void
    {
        $basket = basket()->all();
        $this->total = getProductsFromSession($basket)->sum('total');

    }

    public function render()
    {
        return view('livewire.front.basket-total-amount');
    }
}
