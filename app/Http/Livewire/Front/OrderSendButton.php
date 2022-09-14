<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Traits\OrderSendButtonTrait;

class OrderSendButton extends Component
{
    use OrderSendButtonTrait;

    public string $buttonText;
    public int $productsCount = 0;

    protected $listeners = [
        'basketUpdated' => 'booted',
    ];

    public function booted(): void
    {
        $this->productsCount = $this->getBasketProductsQtyFromSession();
        if ($this->productsCount <= 0) {
            $this->emit('basketEmpty');
        } else {
            $this->emit('basketNotEmpty');
        }

    }

    public function mount($buttonText = "Отправить"): void
    {
        $this->buttonText = $buttonText;

    }

    public function render()
    {
        return view('livewire.front.order-send-button');
    }
}
