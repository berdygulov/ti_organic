@extends('front.layouts.main')

@section('title', 'Контакты')

@section('content')
    <x-front.page-title title="Контакты"/>
    <section class="page">
        <div class="container">
            <div class="content">
                <div class="content-section">
                    <span class="mb-7 block text-sm">
                        Свяжитесь с нами удобным для вас способом!
                    </span>
                    <ul>
                        <li class="content-list with_icon with_link">
                            <a href="https://instagram.com/tiorganic?igshid=YmMyMTA2M2Y=">
                                <svg class="w-6 h-6">
                                    <use xlink:href="{{ asset('assets/images/svg/sprite.svg#instagram') }}"></use>
                                </svg>
                                <span class="text">Instagram: @tiorganic</span>
                            </a>
                        </li>
                        <li class="content-list with_icon with_link">
                            <a href="https://www.facebook.com/profile.php?id=100005843558063">
                                <svg class="w-6 h-6">
                                    <use xlink:href="{{ asset('assets/images/svg/sprite.svg#facebook') }}"></use>
                                </svg>
                                <span class="text">Facebook: Турсынай Ислямова</span>
                            </a>
                        </li>
                        <li class="content-list with_icon with_link">
                            <a href="tel:+77024337971">
                                <svg class="w-6 h-6">
                                    <use xlink:href="{{ asset('assets/images/svg/sprite.svg#phone') }}"></use>
                                </svg>
                                <span class="text">+7 702 433 7971</span>
                            </a>
                        </li>
                    </ul>
                    <a href="https://wa.me/77024337971" class="btn btn-sm btn-yellow mt-12 ">Написать в WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
@endsection
