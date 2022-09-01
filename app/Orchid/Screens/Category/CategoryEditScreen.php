<?php

namespace App\Orchid\Screens\Category;

use App\Models\Category;
use App\Orchid\Layouts\Category\CategoryEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Toast;

class CategoryEditScreen extends Screen
{
    public $category;

    /**
     * Query data.
     *
     * @return array
     */
    public function query (Category $category): iterable
    {
        return [
            'category' => $category
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name (): ?string
    {
        return 'CategoryEditScreen';
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
            CategoryEditLayout::class
        ];
    }

    public function save (Request $request, Category $category)
    {
        $thumbnail_id = null;

        if ($request->input('category.thumbnail_id')) {
            $thumbnail_id = $request->input('category.thumbnail_id')[ 0 ];
        }

        $category->fill(array_merge($request->collect('category')->except('thumbnail_id')->toArray(), [
            'thumbnail_id' => $thumbnail_id
        ]))->save();

        Toast::success('Категория сохранена');

        return redirect()->route('platform.categories.index');
    }
}
