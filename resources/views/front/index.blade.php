@extends('front.layouts.main')

@section('title', 'Главная')

@section('content')
    <section class="bg-yellow-extra-light relative pt-25 md:pt-29 lg:pt-25 pb-25 md:pb-33 lg:pb-72">
        <div class="container ">
            <div class="flex justify-between items-start">
                <div class="relative z-10 basis-full lg:basis-60">
                    <div>
                        <div class="hidden md:block">
                            <p class="text-white font-bold py-2.5 px-3 bg-blue-dark inline-block rounded-3xl mr-2.5">
                                -50 %</p>
                            <span class="font-bold">скидки на все товары</span>
                        </div>
                        <h1 class="text-blue-dark mt-2.5 mb-7.5">Cамый популярный уход за кожей для вас</h1>
                        <p class="text-lg text-blue-dark mb-12.9">It is a long established fact that a reader will
                            be distracted by the readable content of a page when looking at its layout.</p>
                        <div>
                            <a href="#" class="btn btn-lg btn-yellow mr-3.9 ">О нас</a>
                            <a href="#" class="btn btn-lg btn-red mt-3.9 md:mt-0">
                                <div>Каталог</div>
                                <svg class="w-6 h-6 ml-2">
                                    <use xlink:href="{{ asset('assets/images/svg/sprite.svg#bag') }}"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="absolute right-0 hidden lg:block basis-2/5">
                    <div>
                        <img class="w-[772px] h-[553px]" src="{{ asset('assets/images/png/hero.png') }}"
                             alt="hero-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-23">
        <div class="popular-inner">
            <div class="container">
                <h4 class="text-blue-dark">Cамые продаваемые продукты </h4>
            </div>
            <div class="slider pt-12.5">
                <div class="container">
                    <div class="slider-container popular-container">
                        <div class="swiper-wrapper grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0 ">
                            @foreach($products as $product)
                                <div class="swiper-slide popular-product shadow-shadow">
                                    <div class="popular-item relative h-[172px] p-3.9 flex items-center bg-white rounded cursor-pointer">
                                        <div class="absolute top-0 right-0">
                                            <svg class="w-[88px] h-20 ml-2">
                                                <use xlink:href="{{ asset('assets/images/svg/sprite.svg#product-element') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="popular-item-left basis-3/6	mr-6.5">
                                            <div class="bg-white-2 relative flex items-center justify-center w-full h-[142px]">
                                                <img src="{{ $product->thumbnail?->url() }}" alt="product">
                                                <a href="#" class="sale  absolute top-0 left-0 bg-red py-1.1 px-1.6 text-white font-bold text-xs rounded-br rounded-tl">-50
                                                    %</a>
                                                <a href="#" class="sale hidden absolute top-0 left-0 bg-yellow py-1.1 px-1.6 text-black font-bold text-xs rounded-br rounded-tl">НОВИНКА</a>
                                            </div>
                                        </div>
                                        <div class="popular-item-right basis-3/6 py-3">
                                            <p class="text-lg text-blue-dark mb-2.5 font-bold">{{ $product->title }}</p>
                                            <p class="text-gray-2 text-sm mb-3.9">уход за лицом / маски</p>
                                            <div class="flex items-end">
                                                <p class="text-lg text-green font-bold mr-3.9">{{ currencyFormat($product->price) }} ₸</p>
                                                <p class="old-price text-blue font-bold line-through">{{ currencyFormat($product->old_price) }} ₸</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex mt-7.5 justify-between items-center">
                            <div class="flex">
                                <div
                                        class="swiper-button-prev transition ease-in delay-100 hover:filter hover:brightness-[80%] popular-button-prev flex items-center justify-center w-11 h-11 bg-green rounded-full mr-3.9 cursor-pointer ">
                                    <svg class="w-5 h-5 stroke-white fill-white">
                                        <use
                                                xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-prev') }}"></use>
                                    </svg>
                                </div>
                                <div
                                        class="swiper-button-next transition ease-in delay-100 hover:filter hover:brightness-[80%] popular-button-next flex items-center justify-center w-11 h-11 bg-green rounded-full cursor-pointer">
                                    <svg class="w-5 h-5 stroke-white fill-white">
                                        <use
                                                xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-next') }}"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <a href="#" class="btn btn-lg btn-red mt-3.9 md:mt-0">
                                    <div>Весь каталог</div>
                                    <svg class="w-6 h-6 ml-2">
                                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#bag') }}"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sale">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-7.5">
                <div class="flex justify-between items-center bg-[#D3E3E6] rounded shadow-shadow py-6.5 px-8.5">
                    <div class="left">
                        <p class="text-lg text-green">Самые популярные товары</p>
                        <h5 class="mt-5 mb-10">20% Скидки</h5>
                        <a href="#" class="font-bold text-base readmore">Просмотреть</a>
                    </div>
                    <div class="ml-3.9 hidden md:block">
                        <img class="w-full h-full" src="{{ asset('assets/images/png/product-big.png') }}"
                             alt="sale">
                    </div>
                </div>
                <div class="flex justify-between items-center bg-[#FFE2E1] rounded shadow-shadow py-6.5 px-8.5">
                    <div class="left">
                        <p class="text-lg text-green">Самые популярные товары</p>
                        <h5 class="mt-5 mb-10">50% Скидки</h5>
                        <a href="#" class="font-bold text-base readmore">Просмотреть</a>
                    </div>
                    <div class="ml-3.9 hidden md:block">
                        <img class="w-full h-full" src="{{ asset('assets/images/png/product-big-2.png') }}"
                             alt="sale">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-15 lg:pt-23">
        <div>
            <div class="container">
                <h4 class="text-blue-dark">Категории товаров</h4>
            </div>
            <div class="slider pt-12.5">
                <div class="container">
                    <div class="slider-container category-slider">
                        <div class="swiper-wrapper grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-0 ">
                            <div class="swiper-slide">
                                <div class="category-product rounded bg-white-2 p-3.9">
                                    <div class="bg-white rounded">
                                        <img class="rounded w-full h-full"
                                             src="{{ asset('assets/images/png/category-product.png') }}" alt="">
                                    </div>
                                    <span class="text-lg font-bold block my-3.9">Уход за кожей</span>
                                    <p class="text-base text-gray-2 mb-6.5">It is a long established fact that a
                                        reader will be distracted by the readable.</p>
                                    <a href="#" class="btn btn-sm btn-red">
                                        <div>В каталог</div>
                                        <svg class="w-6 h-6 ml-2">
                                            <use xlink:href="{{ asset('assets/images/svg/sprite.svg#bag') }}"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-product rounded bg-white-2 p-3.9">
                                    <div class="bg-white rounded">
                                        <img class="rounded w-full h-full"
                                             src="{{ asset('assets/images/png/category-product-2.png') }}" alt="">
                                    </div>
                                    <span class="text-lg font-bold block my-3.9">Уход за кожей</span>
                                    <p class="text-base text-gray-2 mb-6.5">It is a long established fact that a
                                        reader will be distracted by the readable.</p>
                                    <a href="#" class="btn btn-sm btn-red">
                                        <div>В каталог</div>
                                        <svg class="w-6 h-6 ml-2">
                                            <use xlink:href="{{ asset('assets/images/svg/sprite.svg#bag') }}"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-product rounded bg-white-2 p-3.9">
                                    <div class="bg-white rounded">
                                        <img class="rounded w-full h-full"
                                             src="{{ asset('assets/images/png/category-product.png') }}" alt="">
                                    </div>
                                    <span class="text-lg font-bold block my-3.9">Уход за кожей</span>
                                    <p class="text-base text-gray-2 mb-6.5">It is a long established fact that a
                                        reader will be distracted by the readable.</p>
                                    <a href="#" class="btn btn-sm btn-red">
                                        <div>В каталог</div>
                                        <svg class="w-6 h-6 ml-2">
                                            <use xlink:href="{{ asset('assets/images/svg/sprite.svg#bag') }}"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-product rounded bg-white-2 p-3.9">
                                    <div class="bg-white rounded">
                                        <img class="rounded w-full h-full"
                                             src="{{ asset('assets/images/png/category-product-2.png') }}" alt="">
                                    </div>
                                    <span class="text-lg font-bold block my-3.9">Уход за кожей</span>
                                    <p class="text-base text-gray-2 mb-6.5">It is a long established fact that a
                                        reader will be distracted by the readable.</p>
                                    <a href="#" class="btn btn-sm btn-red">
                                        <div>В каталог</div>
                                        <svg class="w-6 h-6 ml-2">
                                            <use xlink:href="{{ asset('assets/images/svg/sprite.svg#bag') }}"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-product rounded bg-white-2 p-3.9">
                                    <div class="bg-white rounded">
                                        <img class="rounded w-full h-full"
                                             src="{{ asset('assets/images/png/category-product.png') }}" alt="">
                                    </div>
                                    <span class="text-lg font-bold block my-3.9">Уход за кожей</span>
                                    <p class="text-base text-gray-2 mb-6.5">It is a long established fact that a
                                        reader will be distracted by the readable.</p>
                                    <a href="#" class="btn btn-sm btn-red">
                                        <div>В каталог</div>
                                        <svg class="w-6 h-6 ml-2">
                                            <use xlink:href="{{ asset('assets/images/svg/sprite.svg#bag') }}"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-7.5">
                            <div class="flex">
                                <div
                                        class="category-button-prev transition ease-in delay-100 hover:filter hover:brightness-[80%] flex items-center justify-center w-11 h-11 bg-green rounded-full mr-3.9 cursor-pointer ">
                                    <svg class="w-5 h-5 stroke-white fill-white">
                                        <use
                                                xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-prev') }}"></use>
                                    </svg>
                                </div>
                                <div
                                        class="category-button-next transition ease-in delay-100 hover:filter hover:brightness-[80%] flex items-center justify-center w-11 h-11 bg-green rounded-full cursor-pointer">
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

    <section class="pt-15 lg:pt-23">
        <div class="container">
            <div class="buy-inner">
                <div class="flex justify-between bg-yellow-extra-light rounded shadow-shadow">
                    <div class="basis-full xl:basis-2/4 py-10 lg:py-10 px-8 lg:pl-20">
                        <p class="text-base text-blue-dark">-10% скидки</p>
                        <p class="text-green text-lg mt-1.1 font-bold">Специальное предложение</p>
                        <h5 class="leading-150 mt-5 mb-10">Красота, вдохновленная реальной жизнью</h5>
                        <a href="#" class="btn btn-lg btn-yellow">Купить сейчас</a>
                    </div>
                    <div class="xl:basis-2/4 lg:pr-15 hidden md:grid justify-end">
                        <img src="{{ asset('assets/images/png/buy.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-15 lg:pt-23">
        <div>
            <div class="container">
                <h4 class="text-blue-dark">Наш блог</h4>
            </div>
            <div class="slider pt-12.5">
                <div class="container">
                    <div class="slider-container blog-slider">
                        <div class="swiper-wrapper flex">
                            <div class="swiper-slide h-full">
                                <div class="rounded flex flex-col bg-white-2">
                                    <img class="rounded" src="{{ asset('assets/images/png/blog.png') }}" alt="">
                                    <div class="p-5">
                                        <p class="text-gray-2 text-base mb-3.9">Бесплатная доставка</p>
                                        <p class="mb-7.5 text-blue-dark text-lg font-bold">Наслаждайтесь бесплатной
                                            доставкой вашей любимой косметики</p>
                                        <a class="btn btn-md btn-yellow" href="#">
                                            Читать
                                            <svg class="w-5 h-5 fill-blue-dark stroke-blue-dark ml-2">
                                                <use
                                                        xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-next') }}"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-full">
                                <div class="rounded flex flex-col bg-white-2">
                                    <img class="rounded" src="{{ asset('assets/images/png/blog.png') }}" alt="">
                                    <div class="p-5">
                                        <p class="text-gray-2 text-base mb-3.9">Бесплатная доставка</p>
                                        <p class="mb-7.5 text-blue-dark text-lg font-bold">Наслаждайтесь бесплатной
                                            доставкой вашей любимой косметики
                                            Наслаждайтесь бесплатной доставкой вашей любимой косметики</p>
                                        <a class="btn btn-md btn-yellow" href="#">
                                            Читать
                                            <svg class="w-5 h-5 fill-blue-dark stroke-blue-dark ml-2">
                                                <use
                                                        xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-next') }}"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-7.5">
                            <div class="flex">
                                <div
                                        class="blog-button-prev transition ease-in delay-100 hover:filter hover:brightness-[80%] flex items-center justify-center w-11 h-11 bg-green rounded-full mr-3.9 cursor-pointer ">
                                    <svg class="w-5 h-5 stroke-white fill-white">
                                        <use
                                                xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-prev') }}"></use>
                                    </svg>
                                </div>
                                <div
                                        class="blog-button-next transition ease-in delay-100 hover:filter hover:brightness-[80%] flex items-center justify-center w-11 h-11 bg-green rounded-full cursor-pointer">
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
