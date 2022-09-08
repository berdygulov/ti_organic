@extends('front.layouts.main')

@section('title', 'Каталог')

@section('content')

    <x-front.page-title title="Каталог"/>
    <section>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7.5">
                @foreach($products as $product)
                    <livewire:front.product-card
                        :product_id="$product->id"
                        :title="$product->title" :categories="$product->categories"
                        :price="$product->price" :image_url="$product->thumbnail?->url"/>
                @endforeach
            </div>
        </div>
    </section>

@endsection
