<?php

namespace App\Http\Livewire\Front;

use App\Traits\OrderSendButtonTrait;
use Livewire\Component;

class OrderConfirmButton extends Component
{
    use OrderSendButtonTrait;

    public string $buttonText;
    public string $buttonTextInitial;
    public int $productsCount = 0;
    public string $href;
    public string $class;

    protected $listeners = [
        'basketUpdated' => 'booted',
    ];

    public function booted(): void
    {
        $this->productsCount = $this->getBasketProductsQtyFromSession();
        if ($this->productsCount === 0) {
            $this->buttonText = 'Корзина пуста';
        } else {
            $this->buttonText = $this->buttonTextInitial;
        }
        if ($this->productsCount <= 0) {
            $this->emit('basketEmpty');
        } else {
            $this->emit('basketNotEmpty');
        }

    }

    public function mount($href = '', $buttonTextInitial = "Отправить", $class = ''): void
    {
        $this->buttonTextInitial = $buttonTextInitial;
        $this->class = $class;
        $this->href = $href;

    }

    public function render()
    {
        return view('livewire.front.order-confirm-button');
    }
}
