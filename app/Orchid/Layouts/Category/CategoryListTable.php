<?php

namespace App\Orchid\Layouts\Category;

use App\Models\Category;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CategoryListTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns (): iterable
    {
        return [
            TD::make('title', 'Наименование'),
            TD::make('actions', 'Действия')
                ->align(TD::ALIGN_RIGHT)
                ->render(function (Category $category) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            Link::make('Редактировать')
                                ->route('categories.edit', $category->id)
                                ->icon('pencil'),

                            Button::make('Удалить')
                                ->icon('trash')
                                ->confirm('Вы уверены что хотите удалить данную запись?')
                                ->method('delete', [
                                    'id' => $category->id,
                                ]),
                        ]);
                }),
        ];
    }
}
