<div>
    <div class="popup hidden w-full sm:w-[580px] md:w-[730px]" id="popup-cart">
        <div class="popup-inner">
            <div
                class="popup-top py-7.5 px-2 sm:px-12.5 flex justify-between items-center bg-yellow-extra-light shadow-shadow relative">
                <h5>Корзина</h5>
                <div class="absolute cursor-pointer pl-4 pb-4 pr-12.5 pt-7.5 top-0 right-0"
                     data-fancybox-close>
                    <svg class="w-10 h-10" data-fancybox-close="">
                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#close') }}"></use>
                    </svg>
                </div>
            </div>
            <div class="popup-center bg-white mt-10 md:mt-12.5 mb-5">
                <div class="flex justify-between items-center px-2 sm:px-12.5 text-gray-2 text-sm">
                    <p class="flex basis-[40%] md:basis-[50%]">продукт</p>
                    <p class="flex basis-[30%] md:basis-[25%]">кол-во</p>
                    <p class="flex basis-[30%] md:basis-[25%]">цена</p>
                </div>
                <div class="popup-center-scroll h-[408px] overflow-y-scroll px-2 sm:px-12.5">
                    <div class="flex justify-between items-center py-5 my-5 border-b-2 border-[#E0E0E0] relative">
                        <div
                            class="flex flex-col-reverse baseline md:flex-row basis-[40%] md:basis-[50%] md:items-center">
                            <div
                                class="shadow-shadow rounded mr-3.9 flex basis-[50%] w-[110px] h-[118px] md:w-[135px] md:h-[145px]">
                                <img class="w-full h-full object-cover" src="{{ asset('assets/images/png/cart.png') }}"
                                     alt="">
                            </div>
                            <p class="font-bold text-base mb-1 md:mb-0 flex basis-[50%]">Тоник восстановления </p>
                        </div>
                        <div class="flex basis-[30%] md:basis-[25%]">
                            <div>
                                <x-front.cart-counter/>
                            </div>
                        </div>
                        <div class="flex basis-[30%] md:basis-[25%]">
                            <div>
                                <div class="text-lg text-blue-dark font-bold">12 000 ₸</div>
                                <button
                                    class="absolute top-[20px] transition ease-in delay-100 hover:filter hover:brightness-[80%]  right-0 bg-red border-red rounded py-[5px] px-2 border-2 flex justify-center items-center">
                                    <svg class="w-[24px] h-[24px] cursor-pointer">
                                        <use xlink:href="{{ asset('assets/images/svg/sprite.svg#line') }}"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center py-5 my-5 border-b-2 border-[#E0E0E0] relative">
                        <div
                            class="flex flex-col-reverse baseline md:flex-row basis-[40%] md:basis-[50%] md:items-center">
                            <div
                                class="shadow-shadow rounded mr-3.9 flex basis-[50%] w-[110px] h-[118px] md:w-[135px] md:h-[145px]">
                                <img class="w-full h-full object-cover" src="{{ asset('assets/images/png/cart.png') }}"
                                     alt="">
                            </div>
                            <p class="font-bold text-base mb-1 md:mb-0 flex basis-[50%]">Тоник восстановления </p>
                        </div>
                        <div class="flex basis-[30%] md:basis-[25%]">
                            <div>
                                <div class="flex">
                                    <input id="input-number" class="input-number" type="number" value="1" min="1"
                                           max="100">
                                    <span id="input-number-increment" class="input-number-increment">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex basis-[30%] md:basis-[25%]">
                            <div>
                                <div class="text-lg text-blue-dark font-bold">12 000 ₸</div>
                                <button
                                    class="absolute top-[20px] transition ease-in delay-100 hover:filter hover:brightness-[80%] right-0 bg-red border-red rounded py-[5px] px-2 border-2 flex justify-center items-center">
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
                    <a href="" class="btn-yellow btn-md rounded-[25px] font-bold">К оплате</a>
                </div>
            </div>
        </div>
    </div>
</div>
