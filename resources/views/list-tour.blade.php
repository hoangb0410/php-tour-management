@extends('layouts.master')
@section('content')
    @include('layouts.light-header')
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
            <p><a href="{{ route('home') }}">Home</a> <span><i class="bi bi-dot" style="color: gray"></i></span> Tours</p>
        </div>
    </section>
    <section class="main-content">
        <div class="container">
            <div class="content" style="margin-top: 100px">
                <div class="row mb-5">
                    <div class="col-4">
                        <h1>Attractive tour and interesting experiences</h1>
                    </div>
                    <div class="col-8 " style="display: flex; justify-content: flex-end; align-items: flex-end;">
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
                                        <label class="mb-2">Duration</label>
                                        <div>
                                            <input type="checkbox" id="duration-1"> 0 - 3 days<br>
                                            <input type="checkbox" id="duration-2"> 3 - 5 days<br>
                                            <input type="checkbox" id="duration-3"> 5 - 7 days<br>
                                            <input type="checkbox" id="duration-4"> Over 1 week<br>
                                        </div>
                                    </div>
                                    <label class="mb-2">Type of Tours</label>
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
                    @for ($i = 0; $i < 21; $i++)
                        @include('components.tour')
                    @endfor
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
            </div>
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

        function openTourDetails() {
            $(location).attr('href', 'tour-details');
        }
    </script>
@endpush
