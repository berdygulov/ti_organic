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
    <header class="header bg-yellow-extra-light relative shadow-shadow">
        <div class="container">
            <div class="flex items-center justify-between py-5 lg:py-7">
                <div class="header-relative">
                    <a href="#">
                        <svg class="w-24 h-16">
                            <use xlink:href="{{ asset('assets/images/svg/sprite.svg#logo') }}"></use>
                        </svg>
                    </a>
                </div>
                <div class="hidden lg:block">
                    <nav class="menu">
                        <ul class="flex menu-list">
                            <li class="menu-item">
                                <a href="#">Главная</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Каталог</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">О нас</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Блог</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="flex items-center header-relative">
                    <div class="hidden lg:block">
                        <a href="#"
                           class="btn-icon btn-icon-lg btn-icon-red_outlined mr-6 hidden lg:flex ">
                            <svg class="w-6 h-6 fill-red stroke-red ">
                                <use xlink:href="{{ asset('assets/images/svg/sprite.svg#heart') }}"></use>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a data-fancybox="open_cart"
                           href="#popup-cart"
                           class="btn-icon btn-icon-lg btn-icon-yellow">
                            <svg class="w-6 h-6">
                                <use xlink:href="{{ asset('assets/images/svg/sprite.svg#cart') }}"></use>
                            </svg>
                        </a>
                    </div>
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
                        <a href="#">Главная</a>
                    </li>
                    <li class="menu-item-second">
                        <a href="#">Каталог</a>
                    </li>
                    <li class="menu-item-second">
                        <a href="#">О нас</a>
                    </li>
                    <li class="menu-item-second">
                        <a href="#">Блог</a>
                    </li>
                    <li class="menu-item-second">
                        <a href="#">Контакты</a>
                    </li>
                </ul>
                <a href=""
                   class="btn-red transition mt-7 ease-in delay-100 text-white bg-red py-3 px-5 text-lg font-bold border-red border-2 rounded-3xl inline-block lg:hidden">В
                    каталог</a>
            </nav>
        </div>
    </div>
    {{-- Header end --}}

    {{-- Popup start --}}
    <livewire:front.cart/>
    {{-- Popup end --}}

    {{--  Content start  --}}
    <main>
        @yield('content')
    </main>
    {{-- Content end --}}

    {{-- Footer start  --}}
    <footer class="mt-15 lg:mt-[90px]">
        <div class="footer-top bg-yellow-extra-light py-10 md:py-12">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-9 md:gap-7 justify-between items-start">
                    <div>
                        <a href="#" class="mb-7 block">
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
                            Категории
                        </p>
                        <ul>
                            <li class="mb-4">
                                <a href="" class="text-gray-3 text-base">Уход за кожей</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="text-gray-3 text-base">Красота и здоровье</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="text-gray-3 text-base">Персональный уход</a>
                            </li>
                            <li>
                                <a href="" class="text-gray-3 text-base">Красота и здоровье</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-blue-dark font-bold text-lg mb-5">
                            О нас
                        </p>
                        <ul>
                            <li class="mb-4">
                                <a href="" class="text-gray-3 text-base">О нас</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="text-gray-3 text-base">Акции</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="text-gray-3 text-base">Блог</a>
                            </li>
                            <li>
                                <a href="" class="text-gray-3 text-base">Контакты</a>
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
                        Copyright 2022 © Все права защищены TI Organic
                    </p>
                    <div class="text-white flex items-center mt-5 md:mt-0">
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
        <a href="/adminzone" class="go-to-panel fixed p-3 text-black bg-yellow z-10 top-1/2 right-0 rounded-tl-2xl rounded-bl-2xl translate-x-24 hover:translate-x-0 transition duration-300 ease-in">Админ. зона</a>
    @endauth
</div>
<script src="{{ mix('js/app.js') }}" defer></script>
@livewireScripts
</body>
</html>
