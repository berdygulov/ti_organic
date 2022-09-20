<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TestExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public function query()
    {
        return Product::query();
    }

    public function headings(): array
    {
        return [
            'id',
            'title',
            'description',
            'availability',
            'condition',
            'price',
            'link',
            'image_link',
            'brand',
        ];
    }

    public function map($product): array
    {
        return [
            $product->id,
            $product->title,
            $product->short_desc ?? 'Описание для этого товара отсутствует',
            'in stock',
            'new',
            $product->price . ' KZT',
            route('products.show', ['product_id' => $product->id]),
            $product->thumbnail?->url,
            'TI Organic',
        ];
    }
}
