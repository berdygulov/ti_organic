<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class FooterNote extends Component
{
    public Collection $notes;

    protected $listeners = [
        'productAdded' => 'productAdded',
    ];

    public function mount()
    {
        $this->notes = collect();
    }

    public function remove($key)
    {

    }

    public function productAdded($productTitle)
    {
        if ($this->notes->count() >= 2) {
            $this->notes->shift(1);
        }
        $this->notes->push([
            'message' => "Товар - $productTitle был тобавлен в корзину",
        ]);

        $this->emit('noteShown');
    }

    public function render()
    {
        return view('livewire.front.footer-note');
    }
}
