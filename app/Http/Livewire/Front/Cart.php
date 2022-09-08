<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Cart extends Component
{
    public iterable $products = [];

    protected $listeners = [
        'addToCart' => 'addToCart',
        'deleteProductFromCart' => 'deleteProductFromCart',
    ];

    public function mount()
    {
        $this->products = collect();
    }

    // Computed Properties

    public function getSumProperty()

    {
        $sum = 0;
        foreach ($this->products->all() as $item) {
            $sum = $sum + ($item['quantity'] * $item['price']);
        }
        return $sum;
    }

    public function changeProductQuantity($product_id, $new_quantity = null)
    {
        $this->products = $this->products->map(function ($item, $key) use ($product_id, $new_quantity) {
            if ($item['id'] === $product_id) {
                $modified = [
                    'id' => $item['id'],
                    'image_url' => $item['image_url'],
                    'title' => $item['title'],
                    'price' => $item['price'],
                    'quantity' => $new_quantity ? $new_quantity : $item['quantity'] + 1,
                ];
                $this->emit('productQuantityChanged', $modified['title'], $modified['quantity'], $modified['id']);
                return $modified;
            } else return $item;
        });
    }

    public function addToCart(int $product_id, string $image_url, string $title, int $price)
    {
        if (!$this->products->contains(function ($value, $key) use ($product_id) {
            return $value['id'] == $product_id;
        })) {
            $received = [
                'id' => $product_id,
                'image_url' => $image_url,
                'title' => $title,
                'price' => $price,
                'quantity' => 1,
            ];
            $this->products->push($received);

            $this->emit('addedToCart', $product_id, $image_url, $title, $this->products->count());
        } else {
//            $this->emit('alreadyInCart', $product_id, $image_url, $title);
            $this->changeProductQuantity($product_id);
        }
    }

    public function deleteProductFromCart($product_id)
    {
        $this->products = $this->products->filter(function ($value, $key) use ($product_id) {
            return $value['id'] !== $product_id;
        });
        $this->emit('deletedFromCart', $this->products->count(), $product_id);
    }

    public function render()
    {
        return view('livewire.front.cart');
    }
}
