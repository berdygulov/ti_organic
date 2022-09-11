<div class="fixed right-[5px] top-[15%] z-[1000]">
    @if($notes)
        @foreach($notes as $note)
            <div
                class="note max-w-96 warning active rounded shadow-shadow relative mt-1">
                <div class="note-inner">
                    <div class="note-content row py-2 pl-3 pr-10">
                        {{ $note['message'] }}
                    </div>
                </div>
                <button type="button"
                        class="note-close absolute right-3 top-0 bottom-0 rotate-45">
                    <svg class="w-6 h-6">
                        <use xlink:href="http://127.0.0.1:8000/assets/images/svg/sprite.svg#add-outline"></use>
                    </svg>
                </button>
            </div>
        @endforeach
    @endif
</div>
