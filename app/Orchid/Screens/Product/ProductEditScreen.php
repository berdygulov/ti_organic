<?php

namespace App\Orchid\Screens\Product;

use App\Http\Requests\ProductRequest;
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
            Link::make('Выйти')
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

    public function save (ProductRequest $request, Product $product)
    {
        $thumbnail_id = null;

        if ($request->input('product.thumbnail_id')) {
            $thumbnail_id = $request->input('product.thumbnail_id', [])[ 0 ];
        }

        $status = (bool) $request->input('product.status');

        $product
            ->fill(array_merge($request->collect('product')->except([
                'thumbnail_id',
                'status',
                'categories',
                'gallery',
            ])->toArray(), [
                'thumbnail_id' => $thumbnail_id,
                'status'       => $status,
            ]))
            ->save();

        $product->categories()->sync($request->input('product.categories'));
        $product->gallery()->sync($request->input('product.gallery'));

        Toast::success('Сохранено');

        return redirect()->route('platform.products.index');
    }

    public function delete (Product $product)
    {
        $product->delete();

        Toast::error('Успешно удалено');

        return redirect()->route('products.index');
    }
}
