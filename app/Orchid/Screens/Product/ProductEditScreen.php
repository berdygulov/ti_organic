<?php

namespace App\Orchid\Screens\Product;

use App\Models\Product;
use App\Orchid\Layouts\Product\ProductEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Toast;

class ProductEditScreen extends Screen
{
    public $product;

    /**
     * Query data.
     *
     * @return array
     */
    public function query (Product $product): iterable
    {
        $product->load(['thumbnail', 'gallery']);

        return [
            'product' => $product
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name (): ?string
    {
        return $this->product->exists ? 'Редактирование товара' : 'Добавить новый товар';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar (): iterable
    {
        return [
            Button::make('Удалить')
                ->icon('trash')
                ->confirm('Уверены что хотите удалить запись?')
                ->method('delete'),
            Link::make('Отмена')
                ->icon('cross')
                ->route('products.index'),
            Button::make('Сохранить')
                ->icon('save-alt')
                ->type(Color::PRIMARY())
                ->method('save'),
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
            ProductEditLayout::class
        ];
    }

    public function save (Request $request, Product $product)
    {
        $thumbnail_id = $request->input('product.thumbnail_id', [])[ 0 ];

        $product
            ->fill(array_merge($request->collect('product')->except(['thumbnail_id'])->toArray(), [
                'thumbnail_id' => $thumbnail_id
            ]))
            ->save();

        Toast::success('Ok');

        return back();
    }

    public function delete (Product $product)
    {
        $product->delete();

        Toast::error('Успешно удалено');

        return redirect()->route('products.index');
    }
}
