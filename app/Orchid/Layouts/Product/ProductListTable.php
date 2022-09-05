<?php

namespace App\Orchid\Layouts\Product;

use App\Models\Product;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ProductListTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'products';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns (): iterable
    {
        return [
            TD::make('title', 'Наименование'),
            TD::make('price', 'Цена'),
            TD::make('old_price', 'Старая цена'),
            TD::make('actions', 'Действия')
                ->align(TD::ALIGN_RIGHT)
                ->render(function (Product $product) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            Link::make('Редактировать')
                                ->route('platform.products.edit', $product->id)
                                ->icon('pencil'),

                            Button::make('Удалить')
                                ->icon('trash')
                                ->confirm('Вы уверены что хотите удалить данную запись?')
                                ->method('delete', [
                                    'id' => $product->id,
                                ]),
                        ]);
                }),
        ];
    }
}
