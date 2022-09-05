<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Cart extends Component
{
    public $count = 0;

    public function increment()

    {

        $this->count++;

    }

    public function render()
    {
        return view('livewire.front.cart');
    }
}
