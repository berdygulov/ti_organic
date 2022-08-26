@extends('front.layouts.main')

@section('title', 'Главная')

@section('content')
    <main>
        <section class="bg-yellow-extra-light relative">
            <div class="container ">
                <div class="hero-inner grid grid-cols-2 justify-between items-start">
                    <div class="hero-left relative z-10	">
                        <div class="hero-left-inner">
                            <div>
                                <p class="text-white font-bold py-2.5 px-3 bg-blue-dark inline-block rounded-3xl mr-2.5">-50 %</p>
                                <span class="font-bold">скидки на все товары</span>
                            </div>
                            <h2 class="text-6xl text-blue-dark font-bold mt-2.5 mb-7.5">Cамый популярный уход за кожей для вас</h2>
                            <p class="text-lg text-blue-dark mb-12.9">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div>
                                <a href="" class="btn-yellow mr-3.9">О нас</a>
                                <a href="" class="btn-catalog">
                                    <div>Каталог</div>
                                    <svg class="w-6 h-6 ml-2">
                                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#bag') }}"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-right absolute right-0">
                        <div class="hero-img">
                            <img src="{{ asset('assets/images/png/hero.png') }}" alt="hero-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
