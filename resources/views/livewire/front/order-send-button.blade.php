<div class="flex flex-col">
    <button type="submit" class="btn btn-lg btn-yellow"
            @if($productsCount <= 0) disabled @endif>{{ $buttonText }}</button>
    @if($productsCount == 0)
        <span class="block text-xs text-red mt-3">Корзина пуста</span>
    @endif
</div>
