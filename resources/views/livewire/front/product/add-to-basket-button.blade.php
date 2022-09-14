<div class="">
    <div class="flex items-center">
        <div class="mr-[70px]">
            <div class="flex">
                <input wire:model="qty"
                       id="input-number-product-{{$productId}}" class="input-number"
                       type="number"
                       value="1"
                       min="1" max="100">
                <span wire:click="increase" id="input-number-increment-product-{{$productId}}"
                      class="input-number-increment transition ease-in delay-100 hover:filter
                                    hover:brightness-[80%]">+</span>
            </div>
        </div>
        <button wire:click="add" class="btn-yellow btn btn-md inline-flex items-center">
            <svg class="w-6 h-6 mr-2 hover:stroke-red">
                <use xlink:href="{{ asset('assets/images/svg/sprite.svg#plus') }}"></use>
            </svg>
            В корзину
        </button>
    </div>
</div>
