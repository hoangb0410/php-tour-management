@extends('layouts.master')
@section('content')
    @include('layouts.navbar', ['navbar_type' => 'dark'])

    <section class="path" style="margin-top: 160px; margin-bottom: 50px">
        <div class="container">
            <p><a href="{{ route('home') }}">Home</a> <span><i class="bi bi-dot" style="color: gray"></i></span><a
                    href="{{ route('list-hotel') }}"> Hotels </a><span><i class="bi bi-dot" style="color: gray"></i></span>
                Hotel Details</p>
        </div>
    </section>
    <section class="main-content">
        <div class="container">
            <div class="content-header mb-5">
                <div class="row mb-3">
                    <div class="col-8">
                        <h1>TownePlace Suites Gaithersburg by Marriott</h1>
                    </div>
                </div>
                <p><i class="fa-solid fa-location-dot mb-3 me-2"></i>Vungtau City, Baria-Vungtau</p>
                <div class="review">
                    <div class="star hotel-rating">
                        <p>Rating: 9.5</p>
                    </div>
                    <p class="me-5">(150 reviews)</p>
                    <div class="d-flex gap-1 justify-content-center">
                        <span class="rating-star">★</span>
                        <span class="rating-star">★</span>
                        <span class="rating-star">★</span>
                        <span class="rating-star">★</span>
                        <span class="rating-star">★</span>
                    </div>
                </div>
            </div>
            <div class="content-details row mb-5">
                <div class="col-7">
                    <div class="details__item mb-3">
                        <div class="details__item__image">
                            <img id="main-image" src="{{ asset('assets/beach.png') }}" alt="beach">
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                            <button id="prev" class="arrow" style="left: 10px;"><i class="fa-solid fa-chevron-left"
                                    style="color: white"></i></button>
                            <button id="next" class="arrow" style="right: 10px;"><i class="fa-solid fa-chevron-right"
                                    style="color: white"></i></button>
                        </div>
                    </div>
                    <div class="row review__list">
                        <div class="col-3 review__item">
                            <div class="review__item__image" style="cursor: pointer;">
                                <img src="{{ asset('assets/beach.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-3 review__item">
                            <div class="review__item__image" style="cursor: pointer;">
                                <img src="{{ asset('assets/picture-3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-3 review__item">
                            <div class="review__item__image" style="cursor: pointer;">
                                <img src="{{ asset('assets/picture-7.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-3 review__item">
                            <div class="review__item__image" style="cursor: pointer;">
                                <img src="{{ asset('assets/picture-9.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-4">
                    <form class="tour-booking-form" id="tour-booking-form">
                        <p class="mb-3">from <span style="font-size: 24px;">$234.00</span></p>
                        <hr class="mb-3">
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text fixed-width"><i class="fa-regular fa-calendar"></i></span>
                                <input class="form-control p-3" type="text" id="date-picker"
                                    placeholder="Select date range" readonly>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text fixed-width"><i class="fa-solid fa-user-group"></i></span>
                                <input class="form-control p-3" type="text" id="adults-children"
                                    placeholder="2 Adults - 1 Child" readonly data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <ul class="dropdown-menu p-3">
                                    <li>
                                        <label for="num-adults">Adults:</label>
                                        <input type="number" id="num-adults" class="form-control mb-2" value="2"
                                            min="0">
                                    </li>
                                    <li>
                                        <label for="num-children">Children:</label>
                                        <input type="number" id="num-children" class="form-control" value="1"
                                            min="0">
                                    </li>
                                    <li>
                                        <button class="btn btn-primary mt-3" id="update-button">Update</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="quantity-selection">
                                <div class="row mb-3 room">
                                    <div class="col-5 room-name">Standard Room</div>
                                    <div class="col-4 quantity-control">
                                        <button class="decrease-btn" data-room="standard">-</button>
                                        <span id="standard-quantity" class="quantity">1</span>
                                        <button class="increase-btn" data-room="standard">+</button>
                                    </div>
                                    <div class="col-3 price text-right">$120.00</div>
                                </div>
                                <div class="row mb-3 room">
                                    <div class="col-5 room-name">Family Suite</div>
                                    <div class="col-4 quantity-control">
                                        <button class="decrease-btn" data-room="family">-</button>
                                        <span id="family-quantity" class="quantity">0</span>
                                        <button class="increase-btn" data-room="family">+</button>
                                    </div>
                                    <div class="col-3 price text-right">$240.00</div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-3">
                        <div class="mb-3">
                            <p><strong>Add-ons:</strong></p>
                            <div class="quantity-selection">
                                <div class="row mb-3 addon">
                                    <div class="col-5 addon-name">Breakfast</div>
                                    <div class="col-4 quantity-control">
                                        <button class="decrease-btn" data-addon="breakfast">-</button>
                                        <span id="breakfast-quantity" class="quantity">1</span>
                                        <button class="increase-btn" data-addon="breakfast">+</button>
                                    </div>
                                    <div class="col-3 price text-right">$20.00</div>
                                </div>
                                <div class="row mb-3 addon">
                                    <div class="col-5 addon-name">Extra Bed</div>
                                    <div class="col-4 quantity-control">
                                        <button class="decrease-btn" data-room="bed">-</button>
                                        <span id="bed-quantity" class="quantity">0</span>
                                        <button class="increase-btn" data-room="bed">+</button>
                                    </div>
                                    <div class="col-3 price text-right">$0</div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-3">
                        <div class="d-flex total justify-content-between mb-3">
                            <p>Total</p>
                            <p><strong>$450.00</strong></p>
                        </div>
                        <button type="submit" class="btn form-button w-100 p-3" id="book-now-button">Book now</button>
                    </form>
                </div>
            </div>
            <div class="information row mb-5">
                <div class="category col-7">
                    <div class="d-flex justify-content-between">
                        <p id="select-room-category" class="category-item">Select room</p>
                        <p id="description-category" class="category-item">Descriptions</p>
                        <p id="reviews-category" class="category-item">Reviews(54)</p>
                    </div>
                    <hr>
                    <div class="select-room content-section">
                        <div class="room__list">
                            <h4 class="mb-3">Rooms</h4>
                            @for ($i = 0; $i < 5; $i++)
                                @include('components.room')
                            @endfor
                        </div>
                    </div>
                    <div class="description content-section">
                        <div class="overview-section mb-3">
                            <h4 class="mb-3">Overview</h4>
                            <p class="content-font">
                                Opposite Durban's famous beachfront, Blue Waters Hotel is within walking distance of the
                                Suncoast Casino and the iconic Moses Mabhida Stadium. Both uShaka Marine World and Greyville
                                Racecourse are within 2.5 mi from the property.<br><br>The spacious rooms and suites feature
                                LCD TVs along with coffee-and-tea-making facilities. Each is equipped with air conditioning
                                and a work desk. There is also plenty of luggage storage space. Most rooms come with
                                furnished balconies and offer a view of the Indian Ocean.<br><br>Guests at Blue Waters can
                                enjoy afternoon tea and cake in the Florida Lounge overlooking the ocean. The Versailles
                                Restaurant provides buffet and á la carte service for lunch and dinner.<br><br>Leisure
                                facilities at the Hotel Blue Waters include an indoor swimming pool, sauna and a squash
                                court. There is also an outdoor rooftop swimming pool and guests can enjoy drinks with
                                sunset views at the rooftop bar.<br><br> The Durban North Beach area is a good location for
                                walking, running and cycling. Hotel Blue Waters is 5 minutes' drive from the Durban ICC and
                                10 minutes' drive from Durban's city center. Durban Station is 1.2 mi away, while King Shaka
                                International Airport is 19 mi from the property.<br><br>Couples in particular like the
                                location - they rated it 9.1 for a two-person trip.<br><br>We speak your language!
                            </p>
                        </div>
                        <hr>
                        <div class="amenitiy-section">
                            <h4 class="mb-3">Hotel Amenities</h4>
                            <ul class="content-font check">
                                <li>Air conditioning</li>
                                <li>Private Bathroom</li>
                                <li>Flat-screen TV</li>
                                <li>Free WiFi</li>
                                <li>Free toiletries</li>
                                <li>Shower</li>
                                <li>Safe</li>
                                <li>Toilet</li>
                                <li>Towels</li>
                                <li>Tile/Marble floor</li>
                                <li>Desk</li>
                                <li>Refrigerator</li>
                                <li>Telephone</li>
                                <li>Ironing facilities</li>
                                <li>Satellite channels</li>
                                <li>Tea/Coffee make</li>
                                <li>Hairdryer</li>
                                <li>Electric kettle</li>
                                <li>Wake-up service</li>
                                <li>Wardrobe or closet</li>
                            </ul>
                        </div>
                        <hr>
                        <div class="rule-section mb-5">
                            <h4 class="mb-3">Rules</h4>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <h5 class="mb-3" style="color: var(--primary-color)">Checkin</h5>
                                    <div class="rule-hour text-center">
                                        <h4 class="mb-0">02:00 pm</h4>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-3" style="color: var(--primary-color)">Checkout</h5>
                                    <div class="rule-hour text-center">
                                        <h4 class="mb-0">12:00 am</h4>
                                    </div>
                                </div>
                            </div>
                            <ul class="content-font">
                                <li>Smoking is not allowed</li>
                                <li>Security deposit will not be collected at this hotel</li>
                                <li>Check-out time is 12:00 AM</li>
                                <li>Pets are not allowed</li>
                                <li>Credit cards are not accepted at this hotel</li>
                                <li>No additional tax has to be paid at the hotel</li>
                                <li>On-site parking is available</li>
                                <li>Check-in time is 2:00 PM</li>
                                <li>Unmarried couples are allowed</li>
                                <li>Couples are welcome</li>
                                <li>Guests can check in using any Domestic or International ID proof with photograph</li>
                            </ul>
                        </div>
                        <hr>
                        <div class="maps-section mb-5">
                            <h4 class="mb-3">Maps</h4>
                            <img src="{{ asset('assets/maps.png') }}" alt="">
                        </div>
                    </div>
                    <div class="reviews content-section mt-3">
                        <div class="rating-card d-flex mb-5">
                            <div class="review-score me-5">9.5</div>
                            <div class="review-summery">
                                <h1>Wonderful</h1>
                                <p class="content-font">Based on <strong>150 reviews</strong></p>
                                <button class="btn outline-button" id="hotel-review-btn">Write a review</button>
                            </div>
                        </div>
                        <div class="comment-section mb-5">
                            <div class="d-flex justify-items-center">
                                <img src="{{ asset('assets/avatar.png') }}" alt="Avatar" class="avatar"
                                    style="margin-left: 0">
                                <div class="rating-details">
                                    <div class="rating mb-2">
                                        <span>Rating 9.5 <i class="bi bi-dot" style="color: gray"></i> Wonderful</span>
                                    </div>
                                    <h4>The best experience ever!</h4>
                                    <p class="content-font">Nevermind <span><i class="bi bi-dot"
                                                style="color: gray"></i></span> Sep 2020</p>
                                </div>
                            </div>
                            <div class="comment-content">
                                <p class="content-font">It was excellent! The trip is long but the vans are comfortable and
                                    have wi-fi. The
                                    driver very friendly as well as Ahmed our guide to the dromedaries. The camp was
                                    beautiful, comfortable beds, clean bathroom and delicious food! </p>
                            </div>
                        </div>
                        <hr>
                        <div class="comment-section mb-5">
                            <div class="d-flex justify-items-center">
                                <img src="{{ asset('assets/avatar.png') }}" alt="Avatar" class="avatar"
                                    style="margin-left: 0">
                                <div class="rating-details">
                                    <div class="rating mb-2">
                                        <span>Rating 9.5 <i class="bi bi-dot" style="color: gray"></i> Wonderful</span>
                                    </div>
                                    <h4>The best experience ever!</h4>
                                    <p class="content-font">Nevermind <span><i class="bi bi-dot"
                                                style="color: gray"></i></span> Sep 2020</p>
                                </div>
                            </div>
                            <div class="comment-content">
                                <p class="content-font">It was excellent! The trip is long but the vans are comfortable and
                                    have wi-fi. The
                                    driver very friendly as well as Ahmed our guide to the dromedaries. The camp was
                                    beautiful, comfortable beds, clean bathroom and delicious food! </p>
                            </div>
                        </div>
                        <hr>
                        <div class="comment-section mb-5">
                            <div class="d-flex justify-items-center">
                                <img src="{{ asset('assets/avatar.png') }}" alt="Avatar" class="avatar"
                                    style="margin-left: 0">
                                <div class="rating-details">
                                    <div class="rating mb-2">
                                        <span>Rating 9.5 <i class="bi bi-dot" style="color: gray"></i> Wonderful</span>
                                    </div>
                                    <h4>The best experience ever!</h4>
                                    <p class="content-font">Nevermind <span><i class="bi bi-dot"
                                                style="color: gray"></i></span> Sep 2020</p>
                                </div>
                            </div>
                            <div class="comment-content">
                                <p class="content-font">It was excellent! The trip is long but the vans are comfortable and
                                    have wi-fi. The
                                    driver very friendly as well as Ahmed our guide to the dromedaries. The camp was
                                    beautiful, comfortable beds, clean bathroom and delicious food! </p>
                            </div>
                        </div>
                        <div class="pagination mt-3">
                            <div class="d-flex justify-content-between">
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
            </div>
            <div class="related">
                <h1 class="mb-5">Recommended for you</h1>
                <div class="hotel__list row mb-5">
                    @for ($i = 0; $i < 3; $i++)
                        @include('components.hotel')
                    @endfor
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection

@push('scripts')
    <script>
        // click on the small image to preview
        $(document).ready(function() {
            $('.review__item__image').click(function() {
                var newSrc = $(this).find('img').attr('src');
                $('#main-image').attr('src', newSrc);
            });
        });

        // select start date and end date
        flatpickr("#date-picker", {
            mode: "range",
            dateFormat: "d/m/Y",
            onChange: function(selectedDates, dateStr) {
                if (selectedDates.length === 2) {
                    const formattedRange =
                        `${flatpickr.formatDate(selectedDates[0], 'd/m/Y')} - ${flatpickr.formatDate(selectedDates[1], 'd/m/Y')}`;
                    document.getElementById('date-picker').value = formattedRange;
                }
            }
        });

        // enter number of adults and children
        $(document).ready(function() {
            $('#update-button').click(function(event) {
                event.preventDefault();
                const adults = $('#num-adults').val();
                const children = $('#num-children').val();
                const inputField = $('#adults-children');
                inputField.val(`${adults} Adults - ${children} ${children == 1 ? 'Child' : 'Children'}`);
            });
        });

        // select description / additional info / reviews
        $(document).ready(function() {
            $('.category-item').click(function() {
                var targetClass = $(this).attr('id').replace('-category', '');
                $('.content-section').hide();
                $('.' + targetClass).show();
                $('.category-item').removeClass('selected');
                $(this).addClass('selected');
            });
            $('#select-room-category').click();
        });

        // preview image
        const images = [
            "{{ asset('assets/beach.png') }}",
            "{{ asset('assets/picture-3.png') }}",
            "{{ asset('assets/picture-7.png') }}",
            "{{ asset('assets/picture-9.png') }}"
        ];
        let currentIndex = 0;

        $('#prev').click(function() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
            $('#main-image').attr('src', images[currentIndex]);
        });

        $('#next').click(function() {
            currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
            $('#main-image').attr('src', images[currentIndex]);
        });

        // increase, decrease quantity
        $(document).ready(function() {
            $('.increase-btn').on('click', function(event) {
                event.preventDefault();
                const type = $(this).data('room') ? 'room' : 'addon';
                const id = $(this).data(type);
                increase(id, type);
            });

            $('.decrease-btn').on('click', function(event) {
                event.preventDefault();
                const type = $(this).data('room') ? 'room' : 'addon';
                const id = $(this).data(type);
                decrease(id, type);
            });
        });

        function increase(id, type) {
            const quantity = $(`#${id}-quantity`);
            quantity.text(parseInt(quantity.text()) + 1);
        }

        function decrease(id, type) {
            const quantity = $(`#${id}-quantity`);
            if (parseInt(quantity.text()) > 0) {
                quantity.text(parseInt(quantity.text()) - 1);
            }
        }

        function openHotelDetails() {
            $(location).attr('href', 'hotel-details');
        }

        $(document).ready(function() {
            $('#book-now-button').on('click', function(e) {
                e.preventDefault();
                $(location).attr('href', '/hotel-booking');
            });
        });
    </script>
@endpush
