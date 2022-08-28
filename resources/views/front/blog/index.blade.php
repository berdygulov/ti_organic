@extends('front.layouts.main')

@section('title', 'Блог')

@section('box-show-header-class', 'box-show-header-class')

@section('content')
    <x-front.page-title title="Блог"/>
    <section>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7.5">
                <div class="rounded flex flex-col bg-white-2">
                    <img class="rounded" src="{{ asset('assets/images/png/blog.png') }}" alt="">
                    <div class="p-5 inline-flex flex-col flex-auto items-start">
                        <p class="text-gray-2 text-base mb-3.9">Бесплатная доставка</p>
                        <p class="mb-7.5 text-blue-dark text-lg font-bold inline-flex flex-auto">Наслаждайтесь бесплатной
                            доставкой вашей любимой косметики</p>
                        <a class="btn btn-md btn-yellow" href="">
                            Читать
                            <svg class="w-5 h-5 fill-blue-dark stroke-blue-dark ml-2">
                                <use
                                        xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-next') }}"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="rounded flex flex-col bg-white-2">
                    <img class="rounded" src="{{ asset('assets/images/png/blog.png') }}" alt="">
                    <div class="p-5 inline-flex flex-col flex-auto items-start">
                        <p class="text-gray-2 text-base mb-3.9">Бесплатная доставка</p>
                        <p class="mb-7.5 text-blue-dark text-lg font-bold inline-flex flex-auto">Наслаждайтесь бесплатной
                            доставкой вашей любимой косметики
                            Наслаждайтесь бесплатной
                            доставкой вашей любимой косметики
                        </p>
                        <a class="btn btn-md btn-yellow" href="">
                            Читать
                            <svg class="w-5 h-5 fill-blue-dark stroke-blue-dark ml-2">
                                <use
                                        xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-next') }}"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="rounded flex flex-col bg-white-2">
                    <img class="rounded" src="{{ asset('assets/images/png/blog.png') }}" alt="">
                    <div class="p-5 inline-flex flex-col flex-auto items-start">
                        <p class="text-gray-2 text-base mb-3.9">Бесплатная доставка</p>
                        <p class="mb-7.5 text-blue-dark text-lg font-bold inline-flex flex-auto">Наслаждайтесь бесплатной
                            доставкой вашей любимой косметики</p>
                        <a class="btn btn-md btn-yellow" href="">
                            Читать
                            <svg class="w-5 h-5 fill-blue-dark stroke-blue-dark ml-2">
                                <use
                                        xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-next') }}"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="rounded flex flex-col bg-white-2">
                    <img class="rounded" src="{{ asset('assets/images/png/blog.png') }}" alt="">
                    <div class="p-5 inline-flex flex-col flex-auto items-start">
                        <p class="text-gray-2 text-base mb-3.9">Бесплатная доставка</p>
                        <p class="mb-7.5 text-blue-dark text-lg font-bold inline-flex flex-auto">Наслаждайтесь бесплатной
                            доставкой вашей любимой косметики</p>
                        <a class="btn btn-md btn-yellow" href="">
                            Читать
                            <svg class="w-5 h-5 fill-blue-dark stroke-blue-dark ml-2">
                                <use
                                        xlink:href="{{ asset('assets/images/svg/sprite.svg#arrow-next') }}"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="rounded flex flex-col bg-white-2">
                    <img class="rounded" src="{{ asset('assets/images/png/blog.png') }}" alt="">
                    <div class="p-5 inline-flex flex-col flex-auto items-start">
                        <p class="text-gray-2 text-base mb-3.9">Бесплатная доставка</p>
                        <p class="mb-7.5 text-blue-dark text-lg font-bold inline-flex flex-auto">Наслаждайтесь бесплатной
                            доставкой вашей любимой косметики
                            Наслаждайтесь бесплатной
                            доставкой вашей любимой косметики
                        </p>
                        <a class="btn btn-md btn-yellow" href="">
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
    </section>

@endsection
