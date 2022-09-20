<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta http-equiv="content-language" content="ru">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>
<body>
<div class="wrapper ">

    {{--  Header start  --}}
    <header class="header bg-yellow-extra-light shadow-shadow fixed w-full left-0 top-0 z-[99]">
        <div class="container">
            <div class="flex items-center justify-between py-5 lg:py-7">
                <div class="header-relative">
                    <a href="{{ route('pages.index') }}">
                        <svg class="w-24 h-16">
                            <use xlink:href="{{ asset('assets/images/svg/sprite.svg#logo') }}"></use>
                        </svg>
                    </a>
                </div>
                <div class="hidden lg:block">
                    <nav class="menu">
                        <ul class="flex menu-list">
                            <li class="menu-item">
                                <a href="{{ route('pages.index') }}">Главная</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('products.index') }}">Каталог</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('pages.about') }}">О нас</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('blogs.index') }}">Блог</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('pages.contacts') }}">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="flex items-center header-relative">
                    <div class="hidden">
                        <a href="#"
                           class="btn-icon btn-icon-lg btn-icon-red_outlined mr-6 hidden lg:flex ">
                            <svg class="w-6 h-6 fill-red stroke-red ">
                                <use xlink:href="{{ asset('assets/images/svg/sprite.svg#heart') }}"></use>
                            </svg>
                        </a>
                    </div>
                    <livewire:front.basket-button/>
                    <div class="burger">
                        <svg class="w-14 h-14 ml-6 cursor-pointer block lg:hidden">
                            <use xlink:href="{{ asset('assets/images/svg/sprite.svg#hamburger') }}"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-mobile">
        <div class="header-mobile-body">
            <div class="flex items-center justify-between px-8 py-6 lg:py-7">
                <h6 class="text-2xl font-bold">
                    Меню
                </h6>
                <div class="second-burger">
                    <svg class="w-6 h-6 cursor-pointer lg:hidden">
                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-hamburger') }}"></use>
                    </svg>
                </div>
            </div>
        </div>
        <div class="header-mobile-menu py-10 px-8">
            <nav>
                <ul class="flex menu-list flex-col ">
                    <li class="menu-item-second">
                        <a href="{{ route('pages.index') }}">Главная</a>
                    </li>
                    <li class="menu-item-second">
                        <a href="{{ route('products.index') }}">Каталог</a>
                    </li>
                    <li class="menu-item-second">
                        <a href="{{ route('pages.about') }}">О нас</a>
                    </li>
                    <li class="menu-item-second">
                        <a href="{{ route('blogs.index') }}">Блог</a>
                    </li>
                    <li class="menu-item-second">
                        <a href="{{ route('pages.contacts') }}">Контакты</a>
                    </li>
                </ul>
                <a href="{{ route('products.index') }}"
                   class="btn-red transition mt-7 ease-in delay-100 text-white bg-red py-3 px-5 text-lg font-bold border-red border-2 rounded-3xl inline-block lg:hidden">В
                    каталог</a>
            </nav>
        </div>
    </div>
    {{-- Header end --}}

    {{-- Popup start --}}
    <div class="popup hidden w-full sm:w-[580px] md:w-[730px]" id="popup-cart">
        <div class="popup-inner">
            <div
                class="popup-top py-7.5 px-2 sm:px-12.5 flex justify-between items-center bg-yellow-extra-light shadow-shadow relative">
                <h5>Корзина</h5>
                <div class="absolute cursor-pointer pl-4 pb-4  pr-2 sm:pr-12.5 pt-7.5 top-0 right-0">
                    <svg class="w-10 h-10" data-fancybox-close>
                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#close') }}"></use>
                    </svg>
                </div>
            </div>
            <div class="popup-center bg-white mt-10 md:mt-12.5 mb-5">
                <div class="flex justify-between items-center px-2 sm:px-12.5 text-gray-2 text-sm mb-5">
                    <p class="flex basis-[40%] md:basis-[50%]">продукт</p>
                    <p class="flex basis-[30%] md:basis-[25%]">кол-во</p>
                    <p class="flex basis-[30%] md:basis-[25%]">цена</p>
                </div>
                <div class="popup-center-scroll h-[408px] overflow-y-scroll px-2 sm:px-12.5">
                    <livewire:front.basket-products/>
                </div>
            </div>
            <div class="popup-bottom mt-10 md:mt-12.5 px-2 md:px-12.5 mb-5">
                <div class="popup-bottom-inner flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="text-lg">Итого:</span>
                        <h6 class="ml-2.5">
                            <livewire:front.basket-total-amount/>
                        </h6>
                    </div>
                    <livewire:front.order-confirm-button class="btn btn-yellow btn-md rounded-[25px] font-bold"
                                                         buttonTextInitial="К оплате"
                                                         href="{{ route('orders.create.confirm') }}"/>
                </div>
            </div>
        </div>
        {{--        <livewire:front.basket/>--}}
    </div>
    {{-- Popup end --}}

    {{--  Content start  --}}
    <main class="mt-[102px] lg:mt-[120px]">
        @yield('content')
    </main>
    {{-- Content end --}}

    {{-- Footer start  --}}
    <footer class="mt-15 lg:mt-[90px]">
        <div class="footer-top bg-yellow-extra-light py-10 md:py-12">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-9 md:gap-7 justify-between items-start">
                    <div>
                        <a href="{{ route('pages.index') }}" class="mb-7 block">
                            <svg class="w-24 h-16">
                                <use xlink:href="{{ asset('assets/images/svg/sprite.svg#logo') }}"></use>
                            </svg>
                        </a>
                        <p class="text-gray-2 text-sm">
                            It is a long established fact that a
                            reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                    <div>
                        <p class="text-blue-dark font-bold text-lg mb-5">
                            Продукция
                        </p>
                        <ul>
                            <li class="mb-4">
                                <a href="{{ route('products.index') }}" class="text-gray-3 text-base">Каталог</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="text-gray-3 text-base">Акции</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-blue-dark font-bold text-lg mb-5">
                            О нас
                        </p>
                        <ul>
                            <li class="mb-4">
                                <a href="{{ route('pages.about') }}" class="text-gray-3 text-base">О нас</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('pages.contacts') }}" class="text-gray-3 text-base">Контакты</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('blogs.index') }}" class="text-gray-3 text-base">Блог</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-blue-dark font-bold text-lg mb-5">
                            Мы в соц. сетях
                        </p>
                        <ul>
                            <li class="mb-4">
                                <a href="" class="text-gray-3 text-base">Facebook</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="text-gray-3 text-base">Facebook</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="text-gray-3 text-base">Facebook</a>
                            </li>
                            <li>
                                <a href="" class="text-gray-3 text-base">Facebook</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-green py-4 md:py-5">
            <div class="container">
                <div class="flex flex-wrap flex-col sm:flex-row justify-between items-start sm:items-center">
                    <p class="text-white block">
                        Copyright {{ date("Y") }} © Все права защищены TI Organic
                    </p>
                    <!-- Payment methods black is hidden -->
                    <div class="hidden text-white flex items-center mt-5 md:mt-0">
                        <p class="mr-5">Методы оплаты</p>
                        <div class="flex items-center">
                            <a href="" class="mr-1 w-8 h-8">
                                <img src="{{ asset('assets/images/png/credit-card.png') }}" alt="">
                            </a>
                            <a href="" class="mr-1 w-8 h-8">
                                <img src="{{ asset('assets/images/png/credit-card.png') }}" alt="">
                            </a>
                            <a href="" class="mr-1 w-8 h-8">
                                <img src="{{ asset('assets/images/png/credit-card.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <a class="block mt-5 md:mt-0" href="https://dalacode.kz">
                        <svg class="w-20 h-6">
                            <use xlink:href="{{ asset('assets/images/svg/sprite.svg#dalacode') }}"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    {{-- Footer end  --}}

    @auth
        <a href="/adminzone"
           class="go-to-panel fixed p-3 text-black bg-yellow z-10 top-1/2 right-0 rounded-tl-2xl rounded-bl-2xl translate-x-24 hover:translate-x-0 transition duration-300 ease-in">Админ.
            зона</a>
    @endauth
</div>
<script src="{{ mix('js/app.js') }}" defer></script>
@livewireScripts
</body>
</html>
