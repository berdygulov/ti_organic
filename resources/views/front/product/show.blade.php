@extends('front.layouts.main')

@section('title',  $product->title)

@section('content')
    <x-front.page-title :title="$product->title"/>
    <section class="product">
        <div class="container">
            <div class="product-inner">
                <div class="mb-7.5 xl:mb-0 xl:mr-[50px] product-left">
                    <div class="swiper-container product-big-slider rounded shadow-shadow">
                        <div class="swiper-wrapper rounded ">
                            <div class="swiper-slide">
                                <div class="panzoom zooms h-[401px] bg-white cursor-pointer relative">
                                    <div class="panzoom__content w-full h-full">
                                        <img class="w-full h-full object-cover object-center"
                                             src="{{ $product->thumbnail?->url }}" alt="{{ $product->title }}">
                                    </div>
                                </div>
                                <div class="hidden">
                                    <svg
                                        class="absolute cursor-pointer z-10 w-10 h-10 transition ease-in delay-100 stroke-red fill-white hover:fill-red absolute top-4 right-4">
                                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#favorite') }}"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product bottom slider is hidden -->
                    <div class="swiper-container hidden products-gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide overflow-hidden">
                                <div class="products-gallery-item w-full h-full">
                                    <img class="object-cover w-full h-auto"
                                         src="{{ asset('assets/images/png/blog.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide overflow-hidden">
                                <div class="products-gallery-item w-full h-full">
                                    <img class="object-cover w-full h-auto"
                                         src="{{ asset('assets/images/png/single-product-big.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-6.5">
                            <div
                                class="swiper-button-prev transition ease-in delay-100 hover:filter hover:brightness-[80%] single-product-button-prev flex items-center justify-center w-11 h-11 bg-[#F2F2F2] rounded-full mr-3.9 cursor-pointer ">
                                <svg class="w-5 h-5 stroke-blue-dark fill-blue-dark">
                                    <use xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-prev') }}"></use>
                                </svg>
                            </div>
                            <div class="swiper-pagination single-product-pagination"></div>
                            <div
                                class="swiper-button-next transition ease-in delay-100 hover:filter hover:brightness-[80%] single-product-button-next flex items-center justify-center w-11 h-11 bg-[#F2F2F2] rounded-full cursor-pointer">
                                <svg class="w-5 h-5 stroke-blue-dark fill-blue-dark">
                                    <use xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-next') }}"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <h5 class="lg:mb-[35px] mb-6.5">{{ $product->title }}</h5>
                        @if($product->short_description)
                            <div class="text-base prose">
                                {!!$product->short_description !!}
                            </div>
                        @endif
                        <div class="lg:mt-[35px] mt-6.5 flex items-end mb-[40px] lg:mb-12.5">
                            <p class="text-green text-32 font-bold mr-[7px] sm:mr-3.9">
                                <span
                                    class="text-2xl text-blue-dark mr-[7px] sm:mr-3.9">Цена:</span> {{ currencyFormat($product->price)}}
                            </p>
                            @if($product->old_price)
                                <p class="text-2xl text-blue line-through">{{ currencyFormat($product->old_price) }}</p>
                            @endif
                        </div>
                        <livewire:front.product.add-to-basket-button :productId="$product->id"/>
                    </div>
                </div>
            </div>
            @if($product->description)
                <div class="product-info mt-12 md:mt-16 flex justify-center">
                    <div class="w-full xl:w-4/5">
                        <h6 class="mb-6.5">
                            Подробное описание
                        </h6>
                        <div class="text-base prose max-w-full w-full">
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <section class="mt-[90px] lg:mt-[110px]">
        <div>
            <div class="container">
                <h5 class="text-blue-dark">Похожие товары</h5>
            </div>
            <div class="slider pt-12.5">
                <div class="container">
                    <div class="slider-container similar-slider">
                        <div class="swiper-wrapper flex">
                            @foreach($products as $product)
                                <div class="swiper-slide h-full">
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
                                                <div
                                                    class="mb-3.9 text-gray-3 lowercase text-sm lg:text-left text-center">
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
                                            <span
                                                class="product-price block font-bold text-lg lg:text-left text-center">
                                    {{ $product->price ? currencyFormat($product->price) : '-' }}
                                </span>
                                        </div>
                                        <livewire:front.add-to-basket-button
                                            :productId="$product->id"/>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-7.5">
                            <div class="flex">
                                <div
                                    class="similar-button-prev transition ease-in delay-100 hover:filter hover:brightness-[80%] flex items-center justify-center w-11 h-11 bg-green rounded-full mr-3.9 cursor-pointer ">
                                    <svg class="w-5 h-5 stroke-white fill-white">
                                        <use
                                            xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-prev') }}"></use>
                                    </svg>
                                </div>
                                <div
                                    class="similar-button-next transition ease-in delay-100 hover:filter hover:brightness-[80%] flex items-center justify-center w-11 h-11 bg-green rounded-full cursor-pointer">
                                    <svg class="w-5 h-5 stroke-white fill-white">
                                        <use
                                            xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-next') }}"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
