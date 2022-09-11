<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class BasketButton extends Component
{
    public $qty = 0;

    protected $listeners = [
        'basketUpdated' => 'update',
    ];

    public function mount(): void
    {
        $this->update();
    }

    public function update()
    {
        $this->qty = array_sum(basket()->all());
    }

    public function render()
    {
        return view('livewire.front.basket-button');
    }
}
