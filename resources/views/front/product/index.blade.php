@extends('front.layouts.main')

@section('title', 'Каталог')

@section('content')

    <x-front.page-title title="Каталог"/>
    <section>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7.5">
                <x-front.product-card title="Some text" category="Some text" price=800></x-front.product-card>
                <x-front.product-card title="Some text" category="Some text" price=200></x-front.product-card>
                <x-front.product-card title="Some text" category="Some text" price=400></x-front.product-card>
                <x-front.product-card title="Some text" category="Some text" price=100></x-front.product-card>
                <x-front.product-card title="Some text" category="Some text" price=999></x-front.product-card>
            </div>
        </div>
    </section>

@endsection
