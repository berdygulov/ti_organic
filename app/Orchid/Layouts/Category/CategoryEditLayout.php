<?php

namespace App\Orchid\Layouts\Category;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class CategoryEditLayout extends Rows
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
            Input::make('category.title')
                ->title('Заголовок'),
            TextArea::make('category.excerpt')
                ->title('Краткое описание'),
            Quill::make('category.description')
                ->title('Описание'),
            Upload::make('category.thumbnail_id')
                ->maxFileSize(5)
                ->maxFiles()
                ->title('Изображение')
                ->media()
                ->getAttributes(),
        ];
    }
}
