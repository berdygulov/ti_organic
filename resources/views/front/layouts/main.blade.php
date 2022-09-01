<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta http-equiv="content-language" content="ru">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
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
                        <a data-fancybox="trigger-popup"
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
    <div class="popup hidden w-full sm:w-[580px] md:w-[730px]" id="popup-cart">
        <div class="popup-inner">
            <div class="popup-top py-7.5 px-2 md:px-12 flex justify-between items-center bg-yellow-extra-light shadow-shadow">
                <h5>Корзина</h5>
                <svg class="w-10 h-10 cursor-pointer" data-fancybox-close data-value="1">
                    <use xlink:href="{{ asset('assets/images/svg/sprite.svg#close') }}"></use>
                </svg>
            </div>
            <div class="popup-center bg-white mt-10 md:mt-12.5 mb-5">
                <div class="flex justify-between items-center px-2 md:px-12.5 text-gray-2 text-sm">
                    <p class="flex basis-[40%] md:basis-[50%]">продукт</p>
                    <p class="flex basis-[30%] md:basis-[25%]">кол-во</p>
                    <p class="flex basis-[30%] md:basis-[25%]">цена</p>
                </div>
                <div class="popup-center-scroll h-[408px] overflow-y-scroll px-2 md:px-12.5">
                    <div class="flex justify-between items-center py-5 my-5 border-b-2 border-[#E0E0E0] relative">
                        <div class="flex flex-col-reverse baseline md:flex-row basis-[40%] md:basis-[50%] md:items-center">
                            <div class="shadow-shadow rounded mr-3.9 flex basis-[50%] w-[110px] h-[118px] md:w-[135px] md:h-[145px]">
                                <img class="w-full h-full object-cover" src="{{ asset('assets/images/png/cart.png') }}" alt="">
                            </div>
                            <p class="font-bold text-base mb-1 md:mb-0 flex basis-[50%]">Тоник восстановления </p>
                        </div>
                        <div class="flex basis-[30%] md:basis-[25%]">
                            <div>
                                <div class="flex">
                                    <input id="input-number" class="input-number" type="number" value="1" min="1" max="100">
                                    <span id="input-number-increment" class="input-number-increment transition ease-in delay-100 hover:filter hover:brightness-[80%]">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex basis-[30%] md:basis-[25%]">
                            <div>
                                <div class="text-lg text-blue-dark font-bold">12 000 ₸</div>
                                <button class="absolute top-[20px] transition ease-in delay-100 hover:filter hover:brightness-[80%]  right-0 bg-red border-red rounded py-1.1 px-2 border-2 flex justify-center items-center">
                                    <svg class="w-[24px] h-[24px] cursor-pointer">
                                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#line') }}"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center py-5 my-5 border-b-2 border-[#E0E0E0] relative">
                        <div class="flex flex-col-reverse baseline md:flex-row basis-[40%] md:basis-[50%] md:items-center">
                            <div class="shadow-shadow rounded mr-3.9 flex basis-[50%] w-[110px] h-[118px] md:w-[135px] md:h-[145px]">
                                <img class="w-full h-full object-cover" src="{{ asset('assets/images/png/cart.png') }}" alt="">
                            </div>
                            <p class="font-bold text-base mb-1 md:mb-0 flex basis-[50%]">Тоник восстановления </p>
                        </div>
                        <div class="flex basis-[30%] md:basis-[25%]">
                            <div>
                                <div class="flex">
                                    <input id="input-number" class="input-number" type="number" value="1" min="1" max="100">
                                    <span id="input-number-increment" class="input-number-increment">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex basis-[30%] md:basis-[25%]">
                            <div>
                                <div class="text-lg text-blue-dark font-bold">12 000 ₸</div>
                                <button class="absolute top-[20px] transition ease-in delay-100 hover:filter hover:brightness-[80%] right-0 bg-red border-red rounded py-1.1 px-2 border-2 flex justify-center items-center">
                                    <svg class="w-[24px] h-[24px] cursor-pointer">
                                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#line') }}"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-bottom mt-10 md:mt-12.5 px-2 md:px-12.5 mb-5">
                <div class="popup-bottom-inner flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="text-lg">Итого:</span>
                        <h6 class="ml-2.5">12 000 ₸</h6>
                    </div>
                    <a href="" class="btn-yellow btn-md rounded-[25px]">К оплате</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Popup end --}}

    {{--  Content start  --}}
    <main>
        @yield('content')
    </main>
    {{-- Content end --}}

    {{-- Footer start  --}}
    <footer class="mt-15 lg:mt-23">
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
</body>
</html>
