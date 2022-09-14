<div class="flex flex-col">
    <a href="{{ $href }}" type="submit"
       class="{{ $class }} @if($productsCount <= 0) disabled @endif">{{ $buttonText }}</a>
    @if($productsCount == 0)
        <span class="block text-xs text-red mt-3">Корзина пуста</span>
    @endif
</div>

