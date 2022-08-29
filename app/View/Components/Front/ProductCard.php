<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class ProductCard extends Component
{
    public string $title, $category;
    public int $price;
    public bool $new;
    public int|null $code, $quantity, $discount;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $category, $price, $code = null, $quantity = null, $discount = null, $new = false)
    {
        $this->title = $title;
        $this->category = $category;
        $this->price = $price;
        $this->code = $code;
        $this->quantity = $quantity;
        $this->discount = $discount;
        $this->new = $new;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.product-card');
    }
}
