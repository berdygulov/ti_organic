<?php

namespace App\Orchid\Screens\Product;

use App\Models\Product;
use App\Orchid\Layouts\Product\ProductListTable;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Color;

class ProductListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query (Product $product): iterable
    {
        $products = Product::filters()->defaultSort('created_at', 'desc')->paginate(20);

        return [
            'products' => $products
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name (): ?string
    {
        return 'Список товаров';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar (): iterable
    {
        return [
            Link::make('Добавить')
                ->icon('plus')
                ->type(Color::PRIMARY())
                ->route('products.create')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout (): iterable
    {
        return [
            ProductListTable::class
        ];
    }
}
