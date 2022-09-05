@extends('front.layouts.main')

@section('title', 'Увлажняющая маска Yves Rocher')

@section('content')
    <x-front.page-title title="Увлажняющая маска Yves Rocher"/>
    <section class="product">
        <div class="container">
            <div class="product-inner">
                <div class="mb-7.5 xl:mb-0 lg:mr-[50px] product-left">
                    <div class="swiper-container product-big-slider rounded shadow-shadow">
                        <div class="swiper-wrapper rounded ">
                            <div class="swiper-slide">
                                <div class="panzoom zooms h-[401px] bg-white cursor-pointer relative ">
                                    <div class="panzoom__content">
                                        <img class="w-full h-full"
                                             src="{{ asset('assets/images/png/single-product-big.png') }}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <svg
                                        class="absolute cursor-pointer z-10 w-10 h-10 transition ease-in delay-100 stroke-red fill-white hover:fill-red absolute top-4 right-4">
                                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#favorite') }}"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="panzoom zooms h-[401px] bg-white cursor-pointer relative ">
                                    <div class="panzoom__content">
                                        <img class="w-full h-full"
                                             src="{{ asset('assets/images/png/single-product-big.png') }}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <svg
                                        class="absolute cursor-pointer z-10 w-10 h-10 transition ease-in delay-100 stroke-red fill-white hover:fill-red absolute top-4 right-4">
                                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#favorite') }}"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="panzoom zooms h-[401px] bg-white cursor-pointer relative ">
                                    <div class="panzoom__content">
                                        <img class="w-full h-full"
                                             src="{{ asset('assets/images/png/single-product-big.png') }}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <svg
                                        class="absolute cursor-pointer z-10 w-10 h-10 transition ease-in delay-100 stroke-red fill-white hover:fill-red absolute top-4 right-4">
                                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#favorite') }}"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="panzoom zooms h-[401px] bg-white cursor-pointer relative ">
                                    <div class="panzoom__content">
                                        <img class="w-full h-full"
                                             src="{{ asset('assets/images/png/single-product-big.png') }}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <svg
                                        class="absolute cursor-pointer z-10 w-10 h-10 transition ease-in delay-100 stroke-red fill-white hover:fill-red absolute top-4 right-4">
                                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#favorite') }}"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="panzoom zooms h-[401px] bg-white cursor-pointer relative ">
                                    <div class="panzoom__content">
                                        <img class="w-full h-full"
                                             src="{{ asset('assets/images/png/single-product-big.png') }}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <svg
                                        class="absolute cursor-pointer z-10 w-10 h-10 transition ease-in delay-100 stroke-red fill-white hover:fill-red absolute top-4 right-4">
                                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#favorite') }}"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container products-gallery-slider">
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
                            <div class="swiper-slide overflow-hidden">
                                <div class="products-gallery-item w-full h-full">
                                    <img class="object-cover w-full h-auto"
                                         src="{{ asset('assets/images/png/category-product.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide overflow-hidden">
                                <div class="products-gallery-item w-full h-full">
                                    <img class="object-cover w-full h-auto"
                                         src="{{ asset('assets/images/png/single-product-big.png') }}" alt="">
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
                        <h5 class="lg:mb-[35px] mb-6.5">Увлажняющая маска Yves Rocher</h5>
                        <div>
                            <p class="product-content text-base	">Мягкая текстура, которая в момент устраняет все
                                несовершенства и дарит приятное ощущение свежести после нанесения. Бережный и очень
                                воздушный крем. </p>
                            <p class="product-content text-base	">Мягкая текстура, которая в момент устраняет все
                                несовершенства и дарит приятное ощущение свежести после нанесения. Бережный и очень
                                воздушный крем. </p>
                        </div>
                        <div class="lg:mt-[35px] mt-6.5 flex items-end mb-[40px] lg:mb-12.5">
                            <p class="text-green text-32 font-bold mr-[7px] sm:mr-3.9">
                                <span class="text-2xl text-blue-dark mr-[7px] sm:mr-3.9">Цена:</span> 12 000 ₸</p>
                            <p class="text-2xl text-blue line-through">15 000 ₸</p>
                        </div>
                        <div class="flex items-center">
                            <x-front.cart-counter class="mr-[70px]"/>
                            <button class="btn-yellow btn btn-md inline-flex items-center">
                                <svg class="w-6 h-6 mr-2 hover:stroke-red">
                                    <use xlink:href="{{ asset('assets/images/svg/sprite.svg#plus') }}"></use>
                                </svg>
                                В корзину
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <livewire:test-c param="Some data">
        <section class="mt-[90px] lg:mt-[110px]">
            <div>
                <div class="container">
                    <h5 class="text-blue-dark">Похожие товары</h5>
                </div>
                <div class="slider pt-12.5">
                    <div class="container">
                        <div class="slider-container similar-slider">
                            <div class="swiper-wrapper flex">
                                <div class="swiper-slide h-full">
                                    <x-front.product-card
                                        title="Увлажняющая маска Yves Rocher"
                                        category="уход за лицом"
                                        price=12000
                                    ></x-front.product-card>
                                </div>
                                <div class="swiper-slide h-full">
                                    <x-front.product-card
                                        title="Увлажняющая маска Yves Rocher"
                                        category="уход за лицом"
                                        price=12000
                                    ></x-front.product-card>
                                </div>
                                <div class="swiper-slide h-full">
                                    <x-front.product-card
                                        title="Увлажняющая маска Yves Rocher"
                                        category="уход за лицом"
                                        price=12000
                                    ></x-front.product-card>
                                </div>
                                <div class="swiper-slide h-full">
                                    <x-front.product-card
                                        title="Увлажняющая маска Yves Rocher"
                                        category="уход за лицом"
                                        price=12000
                                    ></x-front.product-card>
                                </div>
                                <div class="swiper-slide h-full">
                                    <x-front.product-card
                                        title="Увлажняющая маска Yves Rocher"
                                        category="уход за лицом"
                                        price=12000
                                    ></x-front.product-card>
                                </div>
                                <div class="swiper-slide h-full">
                                    <x-front.product-card
                                        title="Увлажняющая маска Yves Rocher"
                                        category="уход за лицом"
                                        price=12000
                                    ></x-front.product-card>
                                </div>
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
