@extends('layouts.master')
@section('content')
    @include('layouts.header')
    <section class="banner" style="height: 666px; background-image: url('{{ asset('assets/banner-2.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="slogan">
                        <p>Find deals on hotels, homes, and much more...</p>
                        <h1>From cozy country<br> homes to funky<br> city apartments</h1>
                    </div>
                </div>
                <div class="col-5">
                    <div class="tour-hotel-search">
                        <div class="tour-hotel-search-form" id="tour-form">
                            @include('forms.hotel-search-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-bg-white"></div>
    </section>
    <section class="path">
        <div class="container">
            <p>Home <span><i class="bi bi-dot" style="color: gray"></i></span> Hotels</p>
        </div>
    </section>
    <section class="main-content">
        <div class="container">
            <section class="content" style="margin-top: 100px">
                <div class="row mb-5">
                    <div class="col-4">
                        <h1>Hotels</h1>
                    </div>
                    <div class="col-8 " style="display: flex; justify-content: flex-end; align-items: flex-end;">
                        <div class="sort-by d-flex align-items-center me-5">
                            <span class="me-2" style="color: var(--primary-color)">SORT BY:</span>
                            <div class="dropdown">
                                <button class="btn text-decoration-none dropdown-toggle" type="button" id="sortDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Price
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                                    <li><a class="dropdown-item" href="#">Price</a></li>
                                    <li><a class="dropdown-item" href="#">Rating</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-container">
                            <button id="filter-btn" class="filter-button">Filter</button>
                            <div id="filter-dropdown" class="filter-dropdown">
                                <div class="filter-header">
                                    <span>FILTER BY</span>
                                    <button id="clear-btn">CLEAR</button>
                                </div>
                                <div class="filter-content">
                                    <div class="budget-range-container filter-category">
                                        <label>Budget:</label>
                                        <div class="slider-wrapper">
                                            <div class="double-range-slider-box">
                                                <div class="double-range-slider">
                                                    <span class="range-track" id="range-track"></span>
                                                    <input type="range" class="min" min="0" max="1000"
                                                        value="0" step="1">
                                                    <input type="range" class="max" min="0" max="1000"
                                                        value="1000" step="1">
                                                    <div class="minvalue">$0</div>
                                                    <div class="maxvalue">$1000</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-category">
                                        <label class="mb-2">Hotel star</label>
                                        <div>
                                            <div class="d-flex align-items-center gap-1 mb-1">
                                                <input type="checkbox" id="five-star">
                                                <div class="d-flex flex-row gap-1">
                                                    <span class="rating-star">★</span>
                                                    <span class="rating-star">★</span>
                                                    <span class="rating-star">★</span>
                                                    <span class="rating-star">★</span>
                                                    <span class="rating-star">★</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-1 mb-1">
                                                <input type="checkbox" id="four-star">
                                                <div class="d-flex flex-row gap-1">
                                                    <span class="rating-star">★</span>
                                                    <span class="rating-star">★</span>
                                                    <span class="rating-star">★</span>
                                                    <span class="rating-star">★</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-1 mb-1">
                                                <input type="checkbox" id="three-star">
                                                <div class="d-flex flex-row gap-1">
                                                    <span class="rating-star">★</span>
                                                    <span class="rating-star">★</span>
                                                    <span class="rating-star">★</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-1 mb-1">
                                                <input type="checkbox" id="two-star">
                                                <div class="d-flex flex-row gap-1">
                                                    <span class="rating-star">★</span>
                                                    <span class="rating-star">★</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-1 mb-1">
                                                <input type="checkbox" id="one-star">
                                                <div class="d-flex flex-row gap-1">
                                                    <span class="rating-star">★</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="mb-2">Review Score</label>
                                    <div>
                                        <input type="checkbox" id="score-1"> Wonderful: 9.5+<br>
                                        <input type="checkbox" id="score-2"> Very Good: 9+<br>
                                        <input type="checkbox" id="score-3"> Good: 8+<br>
                                        <input type="checkbox" id="score-4"> Pleasant: 7+<br>
                                    </div>
                                </div>
                                <button class="apply-button">Apply Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hotel__list row mb-5">
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Chic Urban Living</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Spanish Farm - Villa 3</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>The Ritz-Carlton, Pentagon City</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                </div>
                <div class="hotel__list row mb-5">
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Yours Truly DC</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Spanish Farm - Villa 3</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Yours Truly DC</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                </div>
                <div class="hotel__list row mb-5">
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Yours Truly DC</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Spanish Farm - Villa 3
                            </strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Yours Truly DC</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                </div>
                <div class="hotel__list row mb-5">
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Yours Truly DC</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Spanish Farm - Villa 3
                            </strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Yours Truly DC</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                </div>
                <div class="hotel__list row mb-5">
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-3.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Yours Truly DC</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-4.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Spanish Farm - Villa 3
                            </strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                    <div class="hotel__item col-4">
                        <div class="hotel__item__image">
                            <img src="{{ asset('assets/picture-5.png') }}" alt="">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <div class="d-flex gap-1 justify-content-center rating-stars">
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                                <span class="rating-star">★</span>
                            </div>
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Phu Nhuan, Ho Chi Minh</p>
                        <p><strong>Yours Truly DC</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="star hotel-rating">
                                    <p>Rating: 9.5</p>
                                </div>
                                <p>(150 reviews)</p>
                            </div>
                            <p class="mb-0">from <strong>$46.00</strong>/night</p>
                        </div>
                    </div>
                </div>
                <div class="pagination row">
                    <div class="col-4">
                    </div>
                    <div class="col-8 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Showing 1/2</p>
                        </div>
                        <div class="page-buttons d-flex gap-2">
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

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#filter-btn').on('click', function() {
                $('#filter-dropdown').toggle();
            });

            $(document).on('click', function(event) {
                if (!$(event.target).closest('#filter-btn, #filter-dropdown').length) {
                    $('#filter-dropdown').hide();
                }
            });

            $('#clear-btn').on('click', function() {
                $('input[type="checkbox"]').prop('checked', false);
                rangeInput[0].value = 0;
                rangeInput[1].value = 1000;
                setMinValueOutput();
                setMaxValueOutput();
                minRangeFill();
                maxRangeFill();
                MinVlaueBubbleStyle();
                MaxVlaueBubbleStyle();
            });

            let minRangeValueGap = 6;
            const range = document.getElementById("range-track");
            const minval = document.querySelector(".minvalue");
            const maxval = document.querySelector(".maxvalue");
            const rangeInput = document.querySelectorAll("input[type='range']");

            let minRange, maxRange, minPercentage, maxPercentage;

            const minRangeFill = () => {
                range.style.left = (rangeInput[0].value - rangeInput[0].min) / (rangeInput[0].max - rangeInput[
                    0].min) * 100 + "%";
            };
            const maxRangeFill = () => {
                range.style.right = 100 - (rangeInput[1].value - rangeInput[1].min) / (rangeInput[1].max -
                    rangeInput[1].min) * 100 + "%";
            };
            const MinVlaueBubbleStyle = () => {
                minPercentage = (minRange - rangeInput[0].min) / (rangeInput[0].max - rangeInput[0].min) * 100;
                minval.style.left = minPercentage + "%";
                minval.style.transform = `translateX(-${minPercentage}%)`;
            };
            const MaxVlaueBubbleStyle = () => {
                maxPercentage = (maxRange - rangeInput[1].min) / (rangeInput[1].max - rangeInput[1].min) * 100;
                maxval.style.left = maxPercentage + "%";
                maxval.style.transform = `translateX(-${maxPercentage}%)`;
            };

            const setMinValueOutput = () => {
                minRange = parseInt(rangeInput[0].value);
                minval.innerHTML = `$${rangeInput[0].value}`;
            };
            const setMaxValueOutput = () => {
                maxRange = parseInt(rangeInput[1].value);
                maxval.innerHTML = `$${rangeInput[1].value}`;
            };

            setMinValueOutput();
            setMaxValueOutput();
            minRangeFill();
            maxRangeFill();
            MinVlaueBubbleStyle();
            MaxVlaueBubbleStyle();

            rangeInput.forEach((input) => {
                input.addEventListener("input", (e) => {
                    setMinValueOutput();
                    setMaxValueOutput();

                    minRangeFill();
                    maxRangeFill();

                    MinVlaueBubbleStyle();
                    MaxVlaueBubbleStyle();

                    if (maxRange - minRange < minRangeValueGap) {
                        if (e.target.className === "min") {
                            rangeInput[0].value = maxRange - minRangeValueGap;
                            setMinValueOutput();
                            minRangeFill();
                            MinVlaueBubbleStyle();
                            e.target.style.zIndex = "2";
                        } else {
                            rangeInput[1].value = minRange + minRangeValueGap;
                            e.target.style.zIndex = "2";
                            setMaxValueOutput();
                            maxRangeFill();
                            MaxVlaueBubbleStyle();
                        }
                    }
                });
            });
        });
    </script>
@endpush
