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
                        {{-- <button class="">Filter</button> --}}
                        <div class="filter-container">
                            <button id="filter-btn" class="filter-button">Filter</button>
                            <div id="filter-dropdown" class="filter-dropdown">
                                <div class="filter-header">
                                    <span>FILTER BY</span>
                                    <button id="clear-btn">CLEAR</button>
                                </div>
                                <div class="filter-content">
                                    <div class="budget-range-containe filter-category">
                                        <label>Budget:</label>
                                        <div class="slider-wrapper mt-5">
                                            <div class="double_range_slider_box">
                                                <div class="double_range_slider">
                                                    <span class="range_track" id="range_track"></span>
                                                    <input type="range" class="min" min="150" max="1000"
                                                        value="150" step="1">
                                                    <input type="range" class="max" min="150" max="1000"
                                                        value="1000" step="1">
                                                    <div class="minvalue">$150</div>
                                                    <div class="maxvalue">$1000</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-category">
                                        <label>Duration</label>
                                        <div>
                                            <input type="checkbox" id="duration-1"> 0 - 3 days<br>
                                            <input type="checkbox" id="duration-2"> 3 - 5 days<br>
                                            <input type="checkbox" id="duration-3"> 5 - 7 days<br>
                                            <input type="checkbox" id="duration-4"> Over 1 week<br>
                                        </div>
                                    </div>
                                    <label>Type of Tours</label>
                                    <div>
                                        <input type="checkbox" id="tour-type-1"> City-Break<br>
                                        <input type="checkbox" id="tour-type-2"> Wildlife<br>
                                        <input type="checkbox" id="tour-type-3"> Cultural<br>
                                        <input type="checkbox" id="tour-type-4"> Ecotourism<br>
                                        <input type="checkbox" id="tour-type-5"> Sun and Beaches<br>
                                    </div>
                                </div>
                                <button class="apply-button">Apply Filter</button>
                            </div>
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

@push('scripts')
    <script>
        // $(document).ready(function() {
        //     $('#filter-btn').on('click', function() {
        //         $('#filter-dropdown').toggle();
        //     });

        //     $(document).on('click', function(event) {
        //         if (!$(event.target).closest('#filter-btn, #filter-dropdown').length) {
        //             $('#filter-dropdown').hide();
        //         }
        //     });

        //     $('#clear-btn').on('click', function() {
        //         $('input[type="checkbox"]').prop('checked', false);
        //         $('#budget-range').val(150);
        //         updateLabelPosition();
        //     });

        //     const $range = $('#budget-range');
        //     const $rangeValue = $('#rangeValue');

        //     function updateLabelPosition() {
        //         const rangeWidth = $range.width();
        //         const min = parseInt($range.attr('min'));
        //         const max = parseInt($range.attr('max'));
        //         const val = parseInt($range.val());

        //         const percentage = ((val - min) / (max - min)) * 100;

        //         $rangeValue.text(`$${val}`);
        //         $rangeValue.css('left', `calc(${percentage}% - ${$rangeValue.width() / 2}px)`);
        //     }

        //     updateLabelPosition();
        //     $range.on('input', updateLabelPosition);
        // });
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
                rangeInput[0].value = 150;
                rangeInput[1].value = 1000;
                setMinValueOutput();
                setMaxValueOutput();
                minRangeFill();
                maxRangeFill();
                MinVlaueBubbleStyle();
                MaxVlaueBubbleStyle();
            });

            let minRangeValueGap = 6;
            const range = document.getElementById("range_track");
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
