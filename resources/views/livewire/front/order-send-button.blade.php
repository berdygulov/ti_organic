<div class="flex flex-col">
    <button type="submit" class="btn btn-lg btn-yellow"
            @if($productsCount <= 0) disabled @endif>{{ $buttonText }}</button>
</div>
