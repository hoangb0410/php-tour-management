@extends('layouts.master')
@section('content')
    @include('layouts.header')
    <section class="banner" style="height: 666px;">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="slogan">
                        <p>Search hundreds of tours and more</p>
                        <h1>Attractive tour <br>and interesting<br> experiences</h1>
                    </div>
                </div>
                <div class="col-5">
                    <div class="tour-hotel-search">
                        <div class="tour-hotel-search-form" id="tour-form">
                            @include('forms.tour-search-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-bg-white"></div>
    </section>
    <section class="path">
        <div class="container">
            <p>Home <span><i class="bi bi-dot" style="color: gray"></i></span> Tours</p>
        </div>
    </section>
    <section class="main-content">
        <div class="container">
            <section class="content" style="margin-top: 100px">
                <div class="row mb-5">
                    <div class="col-4">
                        <h1>Attractive tour and interesting experiences</h1>
                    </div>
                    <div class="col-8 " style="display: flex; justify-content: flex-end; align-items: flex-end;">
                        <button class="">Filter</button>
                    </div>
                </div>
                <div class="tour__list row mb-3">
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover the most majestic Fansipan peak in Vietnam - the roof of Indochina
                            </strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                </div>
                <div class="tour__list row mb-3">
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover the most majestic Fansipan peak in Vietnam - the roof of Indochina
                            </strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                </div>
                <div class="tour__list row mb-3">
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover the most majestic Fansipan peak in Vietnam - the roof of Indochina
                            </strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                </div>
                <div class="tour__list row mb-3">
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover the most majestic Fansipan peak in Vietnam - the roof of Indochina
                            </strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                </div>
                <div class="tour__list row mb-3">
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover the most majestic Fansipan peak in Vietnam - the roof of Indochina
                            </strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                </div>
                <div class="tour__list row mb-3">
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover the most majestic Fansipan peak in Vietnam - the roof of Indochina
                            </strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                </div>
                <div class="tour__list row mb-3">
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover the most majestic Fansipan peak in Vietnam - the roof of Indochina
                            </strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="tour__item col-4">
                        <div class="tour__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Sapa, Laocai</p>
                        <p><strong>Discover interesting things in the romantic coastal city of Vungtau</strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>3 days - 2 nights </p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-8 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Showing 1/2</p>
                        </div>
                        <div class="page-buttons d-flex">
                            <button class="btn page-button mx-1">←</button>
                            <button class="btn page-button mx-1">1</button>
                            <button class="btn page-button mx-1">2</button>
                            <button class="btn page-button mx-1">→</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    @include('layouts.footer')
@endsection
