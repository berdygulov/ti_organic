<div>
    <div id="note" class="note fixed left-0 bottom-0 w-full warning @if($content) active @endif">
        <div class="container">
            <div class="note-inner">
                <div id="note_content" class="note-content row py-2 text-lg">
                    {{ $content }}
                </div>
            </div>
        </div>
        <button id="note_close" type="button" class="absolute right-3 top-0 bottom-0 rotate-45">
            <svg class="w-6 h-6">
                <use xlink:href="http://127.0.0.1:8000/assets/images/svg/sprite.svg#add-outline"></use>
            </svg>
        </button>
    </div>
</div>
