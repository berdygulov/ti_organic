@extends('front.layouts.main')

@section('title', 'Оформление заказа')

@section('content')
    <x-front.page-title title="Оформление заказа"/>
    <section class="confirm">
        <div class="container">
            <a href="{{ route('products.index') }}" class="btn btn-lg btn-red mt-3.9 md:mt-0 mb-10">
                <div>Вернуться в каталог</div>
                <svg class="w-6 h-6 ml-2">
                    <use xlink:href="http://127.0.0.1:8000/assets/images/svg/sprite.svg#bag"></use>
                </svg>
            </a>
            <div class="confirm-inner grid grid-cols-1 lg:grid-cols-[65%_1fr] gap-7.5">
                <div class="confirm-left">
                    <div class="popup-center bg-white">
                        <div class="flex justify-between items-center pr-2 text-gray-2 text-sm mb-5">
                            <p class="flex basis-[40%] md:basis-[50%]">продукт</p>
                            <p class="flex basis-[30%] md:basis-[25%]">кол-во</p>
                            <p class="flex basis-[30%] md:basis-[25%]">цена</p>
                        </div>
                        <div class="popup-center-scroll h-[480px] overflow-y-scroll pr-2">
                            <!-- Product Line Starts -->
                            <livewire:front.basket-products/>
                            <!-- Product Line Ends -->
                        </div>
                    </div>
                </div>
                <div class="confirm-right">
                    <div class="border-b-2 border-[#E0E0E0] pb-12 mb-12">
                        <div class="confirm-right-row text-base flex justify-between">
                            <p>Общая стоимость</p>
                            <span class="font-bold text-green"> <livewire:front.basket-total-amount/></span>
                        </div>
                        <div class="confirm-right-row text-base flex justify-between mt-5">
                            <p>Доставка</p>
                            <span class="font-bold text-green">0 ₸</span>
                        </div>
                    </div>
                    <div class="confirm-right-row text-base flex justify-between">
                        <p class="font-bold text-lg">Итог:</p>
                        <span class="font-bold text-2xl text-green"><livewire:front.basket-total-amount/></span>
                    </div>
                    <div class="flex justify-end mt-[70px]">
                        <livewire:front.order-confirm-button class="btn btn-lg btn-yellow"
                                                             buttonText="Оформить заказ"
                                                             href="{{ route('orders.create.send') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
