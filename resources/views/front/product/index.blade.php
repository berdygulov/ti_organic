@extends('front.layouts.main')

@section('title', 'Каталог')

@section('content')

    <x-front.page-title title="Каталог"/>
    <section>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7.5">
                @foreach($products as $product)
                    <div
                        class="product_card rounded p-3.9 w-full  shadow-shadow bg-white hover:bg-[#F2F3F6] hover:shadow-none transition-all duration-150 ease-in flex flex-col justify-between">
                        @if($product->novelty || $product->old_price)
                            <div class="product-top mb-3.9 grid-rows-1 gap-1">
                                @if($product->old_price)
                                    <span
                                        class="discount inline-block px-[7px] py-[5px] bg-green text-white text-sm rounded">
                                            {{ discountPercentage($product->old_price, $product->price) }}
                                        </span>
                                @endif
                                @if($product->novelty)
                                    <span
                                        class="discount inline-block px-[7px] py-[5px] bg-yellow text-white text-sm rounded uppercase">
                                            Новинка
                                        </span>
                                @endif
                            </div>
                        @endif
                        <a href="{{ route('products.show', ['product_id'=>$product->id]) }}"
                           class="product-image h-[197px] w-auto flex justify-center items-center mb-3.9">
                            <img class="max-h-full" src="{{ $product->thumbnail?->url }}"
                                 alt="{{ $product->title }}">
                        </a>
                        <div class="product-content">
                            <a href="{{ route('products.show', ['product_id'=>$product->id]) }}"
                               class="product-title text-lg mb-[3px] block font-bold lg:text-left text-center">
                                {{ $product->title ? $product->title : 'Название товара' }}
                            </a>
                            <p class="block product-cat text-sm text-gray-2 mb-2.5 lowercase lg:text-left text-center">
                                @foreach($product->categories as $category)
                                    {{  $category->title . ' / '}}
                                @endforeach
                            </p>
                            @if($product->code !== null || $product->quantity !== null)
                                <div class="mb-3.9 text-gray-3 lowercase text-sm lg:text-left text-center">
                                    @if($product->code !== null)
                                        <span class="product-code block mb-[3px]">
                                                id: {{ $product->code }}
                                            </span>
                                    @endif
                                    @if($product->quantity !== null)
                                        <span class="product-quantity block lg:text-left text-center">
                                                количество: {{ $product->quantity }}
                                            </span>
                                    @endif
                                </div>
                            @endif
                            <span class="product-price block font-bold text-lg lg:text-left text-center">
                                    {{ $product->price ? currencyFormat($product->price) : '-' }}
                                </span>
                        </div>
                        <livewire:front.add-to-basket-button
                            :productId="$product->id"/>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
