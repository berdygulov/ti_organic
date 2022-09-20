<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class Basket extends Component
{
    public array $basket = [];
    public array $products = [];
    public int $total = 0;

    protected $listeners = [
        'basketUpdated' => 'booted',
    ];

    public function booted(): void
    {
        $this->basket = basket()->all();
        $this->products = tap($this->products(),
            fn(Collection $products) => $this->total = $products->sum('total'))->toArray();
    }

    private function products(): Collection
    {
        if (empty($this->basket)) {
            return new Collection();
        }
        return Product::whereIn('id', array_keys($this->basket))
            ->get()
            ->map(function (Product $product) {
                return (object)[
                    'id' => $product->id,
                    'url' => $product->thumbnail?->url,
                    'title' => $product->title,
                    'price' => $product->price,
                    'qty' => $this->basket[$product->id],
                    'total' => $product->price * $this->basket[$product->id],
                ];
            });
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
        return view('livewire.front.basket');
    }
}
