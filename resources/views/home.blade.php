@extends('layouts.master')
@section('content')
    @include('layouts.navbar', ['navbar_type' => 'light'])

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
            <div class="content row" style="margin-top: 100px">
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
            </div>
            <div class="content">
                <div class="row mb-5">
                    <div class="col-4">
                        <h1>Discover fascinating destinations</h1>
                    </div>
                    <div class="col-8" style="display: flex; justify-content: flex-end; align-items: flex-end;">
                        <button class="filter-button">View all</button>
                    </div>
                </div>
                <div class="destination__list row">
                    @for ($i = 0; $i < 4; $i++)
                        @include('components.destination')
                    @endfor
                </div>
            </div>
            <div class="content">
                <div class="row mb-5">
                    <div class="col-4">
                        <h1>Attractive tour and interesting experiences</h1>
                    </div>
                    <div class="col-8 " style="display: flex; justify-content: flex-end; align-items: flex-end;">
                        <button class="filter-button">View all</button>
                    </div>
                </div>
                <div class="tour__list row">
                    @for ($i = 0; $i < 3; $i++)
                        @include('components.tour')
                    @endfor
                </div>
            </div>
            <div class="content">
                <div class="row mb-5">
                    <div class="col-6">
                        <h1>Experience the traditional cultural beauties of Vietnam</h1>
                    </div>
                    <div class="col-6" style="display: flex; justify-content: flex-end; align-items: flex-end;">
                        <button class="filter-button">View all</button>
                    </div>
                </div>
                <div class="culture__list row">
                    @for ($i = 0; $i < 3; $i++)
                        @include('components.tour')
                    @endfor
                </div>
            </div>
            <div class="content">
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
            </div>
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

        function openTourDetails() {
            $(location).attr('href', 'tour-details');
        }
    </script>
@endpush
