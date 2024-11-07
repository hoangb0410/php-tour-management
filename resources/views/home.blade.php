@extends('layouts.master')
@section('content')
    @include('banner')
    <section class="main-content">
        <div class="container">
            <section class="content row" style="margin-top: 100px">
                <div class="col-sm-6" style="position: relative;">
                    <img src="{{ asset('assets/picture-1.png') }}" alt="" style="width: 400px; height: 445px;"
                        class=" main-image">
                    <img src="{{ asset('assets/picture-2.png') }}" alt="" style="width: 270px; height: 270px;"
                        class=" second-image">
                </div>
                <div class="col-sm-6">
                    <h1 class="mb-5">With NgaoduVietnam, <br> immerses you in majestic <br> space and unique cultural <br>
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
                    <div class="col-8 " style="display: flex; justify-content: flex-end; align-items: flex-end;">
                        <button class="">View all</button>
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
                        <button class="">View all</button>
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
                        <button class="">View all</button>
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
                    <h1>Leave us an email,<br> to get the latest deals</h1>
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
    </div>
    </section>
@endsection
