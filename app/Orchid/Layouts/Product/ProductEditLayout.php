<?php

namespace App\Orchid\Layouts\Product;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
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
            Input::make('product.title'),
            Input::make('product.price'),
            Input::make('product.old_price'),
            Upload::make('product.thumbnail_id')
                ->maxFiles(1),

        ];
    }
}
