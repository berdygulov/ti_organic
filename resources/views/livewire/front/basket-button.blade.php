<div>
    <div class="relative">
        <a data-fancybox="open_cart"
           href="#popup-cart"
           class="btn-icon btn-icon-lg btn-icon-yellow">
            <svg class="w-6 h-6">
                <use xlink:href="{{ asset('assets/images/svg/sprite.svg#cart') }}"></use>
            </svg>
        </a>
        @if($qty > 0)
            <span class="inline-block absolute font-bold text-lg -right-px">+{{ $qty }}</span>
        @endif
    </div>
</div>
