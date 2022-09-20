<?php

namespace App\Orchid\Layouts\Product;

use App\Models\Category;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class ProductEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields (): iterable
    {
        return [
            CheckBox::make('product.status')
                ->sendTrueOrFalse()
                ->title('Опубликован'),
            CheckBox::make('product.novelty')
                ->sendTrueOrFalse()
                ->title('Новинка'),
            Input::make('product.title')
                ->title('Название продукта'),
            Relation::make('product.categories')
                ->fromModel(Category::class, 'title')
                ->multiple()
                ->title('Категории'),
            Input::make('product.price')
                ->title('Цена'),
            Input::make('product.old_price')
                ->title('Старая цена'),
            Quill::make('product.description')
                ->title('Описание'),
            Upload::make('product.thumbnail_id')
                ->title('Главное изображение')
                ->maxFiles(1),
            Upload::make('product.gallery')
                ->media()
                ->groups('gallery')
                ->title('Галерея')
                ->maxFiles(10),
        ];
    }
}
