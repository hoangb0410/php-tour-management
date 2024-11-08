@extends('layouts.master')
@section('content')
    @include('layouts.header')
    <section class="banner" style="height: 776px;">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="slogan">
                        <p>Welcome to NgaoduVietnam</p>
                        <h1>Perfect place <br /> for your stories</h1>
                    </div>
                    <div class="feature">
                        <div>
                            <p><i class="bi bi-dot" style="color: var(--primary-color);"></i>Featured</p>
                        </div>
                        <div class="d-flex gap-5">
                            <p><strong>200+</strong> tours</p>
                            <p><strong>100+</strong> destinations</p>
                            <p><strong>10+</strong> type of tour</p>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="tour-hotel-search">
                        <div class="select-buttons">
                            <button class="selected-button" id="tour-button">Tours</button>
                            <button class="unselected-button" id="hotel-button">Hotels</button>
                        </div>
                        <div class="tour-hotel-search-form" id="tour-form">
                            @include('forms.tour-search-form')
                        </div>
                        <div class="tour-hotel-search-form" id="hotel-form" style="display: none;">
                            @include('forms.hotel-search-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-bg-white"></div>
    </section>
    <section class="main-content">
        <div class="container">
            <section class="content row" style="margin-top: 100px">
                <div class="col-sm-6" style="position: relative;">
                    @include('components.intro')
                </div>
                <div class="col-sm-6">
                    <h1 class="mb-5">With <span style="color: var(--primary-color);">NgaoduVietnam</span>, <br> immerses
                        you in majestic <br> space and unique cultural <br>
                        features</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem id ut eum. Quam temporibus
                        reprehenderit cupiditate blanditiis nisi sint reiciendis? Cum nobis nemo amet. Mollitia aliquid
                        pariatur quae cum tenetur.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem id ut eum. Quam temporibus
                        reprehenderit cupiditate blanditiis nisi sint reiciendis? Cum nobis nemo amet. Mollitia aliquid
                        pariatur quae cum tenetur.</p>
                </div>
            </section>
            <section class="content">
                <div class="row mb-5">
                    <div class="col-4">
                        <h1>Discover fascinating destinations</h1>
                    </div>
                    <div class="col-8" style="display: flex; justify-content: flex-end; align-items: flex-end;">
                        <button class="filter-button">View all</button>
                    </div>
                </div>
                <div class="destination__list row">
                    <div class="destination__item col-3">
                        <div class="destination__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                        </div>
                        <p><strong>Sapa, Laocai</strong></p>
                        <p>24 experiences</p>
                    </div>
                    <div class="destination__item col-3">
                        <div class="destination__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                        </div>
                        <p><strong>Sapa, Laocai</strong></p>
                        <p>24 experiences</p>
                    </div>
                    <div class="destination__item col-3">
                        <div class="destination__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                        </div>
                        <p><strong>Sapa, Laocai</strong></p>
                        <p>24 experiences</p>
                    </div>
                    <div class="col-3">
                        <div class="destination__item__image">
                            <img src="{{ asset('assets/picture-6.png') }}" alt="">
                        </div>
                        <p><strong>Sapa, Laocai</strong></p>
                        <p>24 experiences</p>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="row mb-5">
                    <div class="col-4">
                        <h1>Attractive tour and interesting experiences</h1>
                    </div>
                    <div class="col-8 " style="display: flex; justify-content: flex-end; align-items: flex-end;">
                        <button class="filter-button">View all</button>
                    </div>
                </div>
                <div class="tour__list row">
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
            </section>
            <section class="content">
                <div class="row mb-5">
                    <div class="col-6">
                        <h1>Experience the traditional cultural beauties of Vietnam</h1>
                    </div>
                    <div class="col-6" style="display: flex; justify-content: flex-end; align-items: flex-end;">
                        <button class="filter-button">View all</button>
                    </div>
                </div>
                <div class="culture__list row">
                    <div class="culture__item col-4">
                        <div class="culture__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Lang Vong, Hanoi</p>
                        <p><strong>“ Com lang Vong “ - Traditional culinary features of the old Hanoi people
                            </strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>6 hours</p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="culture__item col-4">
                        <div class="culture__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Lang Vong, Hanoi</p>
                        <p><strong>“ Com lang Vong “ - Traditional culinary features of the old Hanoi people
                            </strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>6 hours</p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                    <div class="culture__item col-4">
                        <div class="culture__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Lang Vong, Hanoi</p>
                        <p><strong>“ Com lang Vong “ - Traditional culinary features of the old Hanoi people
                            </strong></p>
                        <div class="d-flex justify-content-between">
                            <p><i class="fa-regular fa-calendar me-2"></i>6 hours</p>
                            <p>from <strong>$146.00</strong></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Leave us an email,<br>to get<span style="color: var(--primary-color);"> the latest deals</span>
                    </h1>
                    <form action="" class="d-flex gap-3">
                        <div class="input-container">
                            <i class="fa-regular fa-envelope"></i>
                            <input type="text" placeholder="example@gmail.com">
                        </div>
                        <button>Send</button>
                    </form>
                </div>
            </section>
        </div>
    </section>
    @include('layouts.footer')
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tour-button').click(function() {
                $(this).addClass('selected-button').removeClass('unselected-button');
                $('#hotel-button').addClass('unselected-button').removeClass('selected-button');
                $('#tour-form').show();
                $('#hotel-form').hide();
            });

            $('#hotel-button').click(function() {
                $(this).addClass('selected-button').removeClass('unselected-button');
                $('#tour-button').addClass('unselected-button').removeClass('selected-button');
                $('#hotel-form').show();
                $('#tour-form').hide();
            });
        });
    </script>
@endpush
