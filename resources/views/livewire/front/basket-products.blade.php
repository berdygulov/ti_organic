<div>
@forelse($products as $key => $product)
    <!-- Product Line Starts -->
        <div
            class="flex justify-between items-center py-5 my-5 border-b-2 border-[#E0E0E0] relative">
            <div
                class="flex flex-col-reverse baseline md:flex-row basis-[40%] md:basis-[50%] md:items-center">
                <div
                    class="shadow-shadow rounded mr-3.9 flex basis-[50%] w-[110px] h-[118px] md:w-[135px] md:h-[145px] flex items-center justify-center">
                    <img class="w-auto h-full"
                         src="{{ $product->url }}"
                         alt="{{ $product->title }}">
                </div>
                <p class="font-bold text-base mb-1 md:mb-0 flex basis-[50%]">{{ $product->title }}</p>
            </div>
            <div class="flex basis-[30%] md:basis-[25%] mx-3.9">
                <div>
                    <div class="flex">
                        <input wire:change="change({{$product->id}}, $event.target.value )"
                               id="input-number-product-{{$product->id}}" class="input-number"
                               type="number"
                               value="{{ $product->qty }}"
                               min="1" max="100"/>
                        <span wire:click="increase({{$product->id}})" id="
                                          input-number-increment-product-{{$product->id}}"
                              class="input-number-increment transition ease-in delay-100 hover:filter
                                    hover:brightness-[80%]">+</span>
                    </div>
                </div>
            </div>
            <div class="flex basis-[30%] md:basis-[25%]">
                <div>
                    <div class="text-lg text-blue-dark font-bold">{{ currencyFormat($product->price) }} </div>
                    <button wire:click="remove({{$product->id}})" type="button"
                            class="absolute top-[20px] transition ease-in delay-100 hover:filter hover:brightness-[80%] right-0 bg-red border-red rounded  py-[3px] px-[2px] lg:py-[5px] lg:px-2 border-2 flex justify-center items-center">
                        <svg class="w-[24px] h-[24px] cursor-pointer">
                            <use
                                xlink:href="{{ asset('assets/images/svg/sprite.svg#line') }}"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Product Line Ends -->
    @empty
        <div class="flex justify-between items-center py-5 my-5 relative font-bold">
            Корзина пуста
        </div>
    @endforelse
</div>
