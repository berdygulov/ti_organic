<div>
    <div
        class="product_card rounded p-3.9 w-[300px] shadow-shadow bg-white hover:bg-[#F2F3F6] hover:shadow-none transition-all duration-150 ease-in">
        @if($discount !== null && !$new)
            <div class="product-top mb-3.9 grid-rows-1 gap-1">
                @if($discount !== null)
                    <span class="discount inline-block px-[7px] py-[5px] bg-green text-white text-sm rounded">
                {{ $discount }}
            </span>
                @endif
                @if($new)
                    <span
                        class="discount inline-block px-[7px] py-[5px] bg-yellow text-white text-sm rounded uppercase">
                Новинка
            </span>
                @endif
            </div>
        @endif
        <a href="#" class="product-image h-[197px] w-auto flex justify-center items-center mb-3.9">
            <img class="max-h-full" src="{{ asset('assets/images/png/product-card-image.png') }}" alt="product-image">
        </a>
        <div class="product-content">
            <a href="#" class="product-title text-lg mb-[3px] inline-block font-bold lg:text-left text-center">
                {{ $title ? $title : 'Название товара' }}
            </a>
            <p class="block product-cat text-sm text-gray-2 mb-2.5 lowercase lg:text-left text-center">
                {{ $category ? $category : 'Без категории' }}
            </p>
            @if($code !== null && $quantity !== null)
                <div class="mb-3.9 text-gray-3 lowercase text-sm lg:text-left text-center">
                    @if($code !== null)
                        <span class="product-code block mb-[3px]">
                            code: {{ $code }}
                        </span>
                    @endif
                    @if($quantity !== null)
                        <span class="product-quantity block lg:text-left text-center">
                    количество: {{ $quantity }}
                    </span>
                    @endif
                </div>
            @endif
            <span class="product-price block font-bold text-lg lg:text-left text-center">
                {{ $price ? $price . ' ₸' : '-' }}
            </span>
        </div>
        <div class="product-footer flex justify-end mt-2.5">
            <button type="button" class="btn-icon btn-icon-md btn-icon-yellow">
                <svg>
                    <use xlink:href="http://127.0.0.1:8000/assets/images/svg/sprite.svg#add-outline"></use>
                </svg>
            </button>
        </div>
    </div>
</div>
