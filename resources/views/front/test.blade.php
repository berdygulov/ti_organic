@extends('front.layouts.main')

@section('title', 'Главная')

@section('content')
    <x-front.page-title title="Some text"/>
    <x-front.product-card title="Some text" category="Some text" price=8/>
@endsection
