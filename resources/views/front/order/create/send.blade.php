@extends('front.layouts.main')

@section('title', 'Информация о заказе')

@section('content')
    <x-front.page-title title="Информация о заказе"/>
    <section class="sending">
        <div class="container">
            <a href="{{ route('products.index') }}" class="btn btn-lg btn-red mt-3.9 md:mt-0 mb-10">
                <div>Вернуться в каталог</div>
                <svg class="w-6 h-6 ml-2">
                    <use xlink:href="{{ asset('assets/images/svg/sprite.svg#bag') }}"></use>
                </svg>
            </a>
            <div class="sending-inner grid grid-cols-1 lg:grid-cols-[65%_1fr] gap-7.5">
                <form action="{{ route('orders.store') }}" method="post">
                    @csrf
                    <div class="sending-left grid gap-10 grid-cols-1 w-full lg:w-3/4">
                        <div class="info">
                            @if (session('order_create.success'))
                                <div class="success-feedback mb-5">
                                    {{ session('order_create.success') }}
                                </div>
                            @endif
                            <div class="sending-header mb-7">
                                <h6>Информация о заказе</h6>
                                <span class="text-gray-3 mt-2 block">(* - обязательные поля)</span>
                            </div>
                            <div class="form-fields grid grid-cols-1 gap-5 text-base">
                                <div class="form-field">
                                    <input type="text" name="surname" value="{{ old('surname') }}"
                                           placeholder="Фамилия *">
                                    @error('surname')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <input type="text" name="name" value="{{ old('city') }}" placeholder="Имя *">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <input type="text" name="patronymic" value="{{ old('patronymic') }}"
                                           placeholder="Отчество">
                                    @error('patronymic')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <input type="text" class="input-phone" name="phone" value="{{ old('phone') }}"
                                           placeholder="Телефон *">
                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="address-info">
                            <div class="sending-header mb-7">
                                <h6>Адрес доставки</h6>
                                <span class="text-gray-3 mt-2 block">(* - обязательные поля)</span>
                            </div>
                            <div class="form-fields grid grid-cols-1 gap-5 text-base">
                                <div class="form-field">
                                    <select class="select2" name="city">
                                        <option value="" selected>Выбрать город</option>
                                    </select>
                                    @error('city')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <input type="text" name="address" value="{{ old('address') }}"
                                           value="{{ old('address') }}"
                                           placeholder="Улица, дом, квартира *">
                                    @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <input type="text" name="postcode" value="{{ old('postcode') }}"
                                           placeholder="Индекс *">
                                    @error('postcode')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-content-start mt-10">
                        <livewire:front.order-send-button/>
                    </div>
                </form>
                <div class="sending-right">
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
                </div>
            </div>
        </div>
    </section>
@endsection
