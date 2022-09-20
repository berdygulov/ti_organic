<div style="text-align: center">
    <button wire:click="increment">+</button>
    <input wire:model="param" type="text">

    <h1>{{ $count }}</h1>
    <h1>{{ $param }}</h1>
</div>
