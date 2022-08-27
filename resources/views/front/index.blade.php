@extends('front.layouts.main')

@section('title', 'Главная')

@section('content')
    <main>
        <section class="bg-yellow-extra-light relative pt-25 md:pt-29 lg:pt-25 pb-25 md:pb-33 lg:pb-72">
            <div class="container ">
                <div class="flex justify-between items-start">
                    <div class="relative z-10 basis-full lg:basis-60">
                        <div>
                            <div class="hidden md:block">
                                <p class="text-white font-bold py-2.5 px-3 bg-blue-dark inline-block rounded-3xl mr-2.5">-50 %</p>
                                <span class="font-bold">скидки на все товары</span>
                            </div>
                            <h2 class="text-blue-dark mt-2.5 mb-7.5">Cамый популярный уход за кожей для вас</h2>
                            <p class="text-lg text-blue-dark mb-12.9">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div>
                                <a href="" class="btn-yellow mr-3.9 ">О нас</a>
                                <a href="" class="btn-catalog mt-3.9 md:mt-0">
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
                            <img class="w-[772px] h-[553px]" src="{{ asset('assets/images/png/hero.png') }}" alt="hero-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="popular py-23">
            <div class="popular-inner">
                <div class="container">
                    <h4 class="text-blue-dark">Cамые продаваемые продукты </h4>
                </div>
                <div class="popular-slider pt-12.5">
                    <div class="container">
                        <div class="popular-container">
                            <div class="swiper-wrapper grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0 md:gap-7.5">
                                <div class="swiper-slide popular-product shadow-shadow">
                                    <div class="popular-item relative h-[172px] p-3.9 flex items-center bg-white rounded cursor-pointer">
                                        <div class="absolute top-0 right-0">
                                            <svg class="w-[88px] h-20 ml-2">
                                                <use xlink:href="{{ asset('assets/images/svg/sprite.svg#product-element') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="popular-item-left basis-3/6	mr-6.5">
                                            <div class="bg-[#F2F3F6] relative flex items-center justify-center w-full h-[142px]">
                                                <img src="{{ asset('assets/images/png/product.png') }}" alt="product">
                                                <a href="" class="sale  absolute top-0 left-0 bg-red py-1.1 px-1.6 text-white font-bold text-xs rounded-br rounded-tl">-50 %</a>
                                                <a href="" class="sale hidden absolute top-0 left-0 bg-yellow py-1.1 px-1.6 text-black font-bold text-xs rounded-br rounded-tl">НОВИНКА</a>
                                            </div>
                                        </div>
                                        <div class="popular-item-right basis-3/6 py-3">
                                            <p class="text-lg text-blue-dark mb-2.5 font-bold">Восстановительный комплекс</p>
                                            <p class="text-gray-2 text-sm mb-3.9">уход за лицом / маски</p>
                                            <div class="flex items-end">
                                                <p class="text-lg text-green font-bold mr-3.9">9 000 ₸</p>
                                                <p class="old-price text-blue font-bold line-through">18 000 ₸</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide popular-product shadow-shadow">
                                    <div class="popular-item relative h-[172px] p-3.9 flex items-center bg-white rounded cursor-pointer">
                                        <div class="absolute top-0 right-0">
                                            <svg class="w-[88px] h-20 ml-2">
                                                <use xlink:href="{{ asset('assets/images/svg/sprite.svg#product-element') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="popular-item-left basis-3/6	mr-6.5">
                                            <div class="bg-[#F2F3F6] relative flex items-center justify-center w-full h-[142px]">
                                                <img src="{{ asset('assets/images/png/product.png') }}" alt="product">
                                                <a href="" class="sale  absolute top-0 left-0 bg-red py-1.1 px-1.6 text-white font-bold text-xs rounded-br rounded-tl">-50 %</a>
                                                <a href="" class="sale hidden absolute top-0 left-0 bg-yellow py-1.1 px-1.6 text-black font-bold text-xs rounded-br rounded-tl">НОВИНКА</a>
                                            </div>
                                        </div>
                                        <div class="popular-item-right basis-3/6 py-3">
                                            <p class="text-lg text-blue-dark mb-2.5 font-bold">Восстановительный комплекс</p>
                                            <p class="text-gray-2 text-sm mb-3.9">уход за лицом / маски</p>
                                            <div class="flex items-end">
                                                <p class="text-lg text-green font-bold mr-3.9">9 000 ₸</p>
                                                <p class="old-price text-blue font-bold line-through">18 000 ₸</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide popular-product shadow-shadow">
                                    <div class="popular-item relative h-[172px] p-3.9 flex items-center bg-white rounded cursor-pointer">
                                        <div class="absolute top-0 right-0">
                                            <svg class="w-[88px] h-20 ml-2">
                                                <use xlink:href="{{ asset('assets/images/svg/sprite.svg#product-element') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="popular-item-left basis-3/6	mr-6.5">
                                            <div class="bg-[#F2F3F6] relative flex items-center justify-center w-full h-[142px]">
                                                <img src="{{ asset('assets/images/png/product.png') }}" alt="product">
                                                <a href="" class="sale  absolute top-0 left-0 bg-red py-1.1 px-1.6 text-white font-bold text-xs rounded-br rounded-tl">-50 %</a>
                                                <a href="" class="sale hidden absolute top-0 left-0 bg-yellow py-1.1 px-1.6 text-black font-bold text-xs rounded-br rounded-tl">НОВИНКА</a>
                                            </div>
                                        </div>
                                        <div class="popular-item-right basis-3/6 py-3">
                                            <p class="text-lg text-blue-dark mb-2.5 font-bold">Восстановительный комплекс</p>
                                            <p class="text-gray-2 text-sm mb-3.9">уход за лицом / маски</p>
                                            <div class="flex items-end">
                                                <p class="text-lg text-green font-bold mr-3.9">9 000 ₸</p>
                                                <p class="old-price text-blue font-bold line-through">18 000 ₸</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide popular-product shadow-shadow">
                                    <div class="popular-item relative h-[172px] p-3.9 flex items-center bg-white rounded cursor-pointer">
                                        <div class="absolute top-0 right-0">
                                            <svg class="w-[88px] h-20 ml-2">
                                                <use xlink:href="{{ asset('assets/images/svg/sprite.svg#product-element') }}"></use>
                                            </svg>
                                        </div>
                                        <div class="popular-item-left basis-3/6	mr-6.5">
                                            <div class="bg-[#F2F3F6] relative flex items-center justify-center w-full h-[142px]">
                                                <img src="{{ asset('assets/images/png/product.png') }}" alt="product">
                                                <a href="" class="sale  absolute top-0 left-0 bg-red py-1.1 px-1.6 text-white font-bold text-xs rounded-br rounded-tl">-50 %</a>
                                                <a href="" class="sale hidden absolute top-0 left-0 bg-yellow py-1.1 px-1.6 text-black font-bold text-xs rounded-br rounded-tl">НОВИНКА</a>
                                            </div>
                                        </div>
                                        <div class="popular-item-right basis-3/6 py-3">
                                            <p class="text-lg text-blue-dark mb-2.5 font-bold">Восстановительный комплекс</p>
                                            <p class="text-gray-2 text-sm mb-3.9">уход за лицом / маски</p>
                                            <div class="flex items-end">
                                                <p class="text-lg text-green font-bold mr-3.9">9 000 ₸</p>
                                                <p class="old-price text-blue font-bold line-through">18 000 ₸</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex mt-7.5 justify-between items-center">
                                <div class="flex">
                                    <div class="swiper-button-prev popular-button-prev flex items-center justify-center w-11 h-11 bg-green rounded-full mr-3.9 cursor-pointer ">
                                        <svg class="w-5 h-5">
                                            <use xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-prev') }}"></use>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next popular-button-next flex items-center justify-center w-11 h-11 bg-green rounded-full cursor-pointer">
                                        <svg class="w-5 h-5">
                                            <use xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-next') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="hidden md:block">
                                    <a href="" class="btn-catalog mt-3.9 md:mt-0">
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
                            <a href="" class="font-bold text-base readmore">Просмотреть</a>
                        </div>
                        <div class="ml-3.9 hidden md:block">
                            <img class="w-full h-full" src="{{ asset('assets/images/png/product-big.png') }}" alt="sale">
                        </div>
                    </div>
                    <div class="flex justify-between items-center bg-[#FFE2E1] rounded shadow-shadow py-6.5 px-8.5">
                        <div class="left">
                            <p class="text-lg text-green">Самые популярные товары</p>
                            <h5 class="mt-5 mb-10">50% Скидки</h5>
                            <a href="" class="font-bold text-base readmore">Просмотреть</a>
                        </div>
                        <div class="ml-3.9 hidden md:block">
                            <img class="w-full h-full" src="{{ asset('assets/images/png/product-big-2.png') }}" alt="sale">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
