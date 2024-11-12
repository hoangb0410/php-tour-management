@extends('layouts.master')
@section('content')
    @include('layouts.header')
    <section class="path" style="margin-top: 160px; margin-bottom: 50px">
        <div class="container">
            <p>Home <span><i class="bi bi-dot" style="color: gray"></i></span> Tours <span><i class="bi bi-dot"
                        style="color: gray"></i></span> Detail tour</p>
        </div>
    </section>
    <section class="main-content">
        <div class="container">
            <section class="content-header mb-5">
                <div class="row mb-3">
                    <div class="col-8">
                        <h1>Discover interesting things in the romantic coastal city of Vungtau</h1>
                    </div>
                </div>
                <p><i class="fa-solid fa-location-dot mb-3 me-2"></i>Vungtau City, Baria-Vungtau</p>
                <div class="review">
                    <div class="star me-5">
                        <p><i class="fa-solid fa-star me-2"></i>4.5</p>
                    </div>
                    <p>128 reviews</p>
                </div>
            </section>
            <section class="content-details row mb-5">
                <div class="col-7">
                    <div class="details__item mb-3">
                        <div class="details__item__image">
                            <img id="main-image" src="{{ asset('assets/beach.png') }}" alt="beach">
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
                        <p>from <span style="font-size: 24px;">$234.00</span></p>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-6">
                                <p style="color: rgb(113, 113, 113); margin: 0;">
                                    Duration
                                </p>
                                <p style="margin: 0;">3 days - 2 nights</p>
                            </div>
                            <div class="col-6">
                                <p style="color: rgb(113, 113, 113); margin: 0;">
                                    Tour type
                                </p>
                                <p style="margin: 0;">Sun - Beach</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text fixed-width"><i class="fa-regular fa-calendar"></i></span>
                                <input class="form-control p-3" type="text" id="date-picker"
                                    placeholder="Select date range" readonly>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
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
                        </div>
                        <div class="d-flex total justify-content-between mb-3">
                            <p>Total</p>
                            <p><strong>$450.00</strong></p>
                        </div>
                        <button type="submit" class="btn form-button w-100 p-3">Book now</button>
                    </form>
                </div>
            </section>
            <section class="information row mb-5">
                <div class="category col-7">
                    <div class="d-flex justify-content-between">
                        <p id="description-category" class="category-item">Descriptions</p>
                        <p id="additional-info-category" class="category-item">Additional Info</p>
                        <p id="reviews-category" class="category-item">Reviews(54)</p>
                    </div>
                    <hr>
                    <div class="description content-section">
                        <div class="overview-section">
                            <h4>Overview</h4>
                            <p class="content-font">
                                Set sail for the idyllic Italian island of Capri on this full-day tour, including
                                round-trip
                                jetfoil transfers from Naples or Sorrento. Stop to browse the handicraft stores of
                                Anacapri
                                and
                                soak up the atmosphere in buzzing La Piazzetta. Top it off with a visit to the Blue
                                Grotto
                                and a
                                funicular ride to Marina Grande. <br>
                            <ul class="content-font">
                                <li>Full-day tour of Capri island from Naples or Sorrento Admire views along the coast
                                    as
                                    you
                                    cruise to the island by jetfoil</li>
                                <li>Visit the lively island towns of Anacapri and Capri Ride</li>
                                <li>The funicular from La Piazzetta to Marina Grande Marvel at natural wonders like the
                                    Blue
                                    Grotto Small-group tour ensures a personalized experience</li>
                            </ul>
                            </p>
                        </div>
                        <hr>
                        <div class="inclusion-section">
                            <h4>What's Included</h4>
                            <ul class="content-font check">
                                <li>Port pickup and drop-off</li>
                                <li>Local guide</li>
                                <li>Round-trip shared transfer</li>
                                <li>Transport by minibus</li>
                                <li>Blue Grotto admission tickets</li>
                                <li>Shared boat ride tour around the island ( if Blue grotto is closed)</li>
                            </ul>
                        </div>
                        <hr>
                        <div class="departure-section">
                            <h4>Departure & Return</h4>
                            <h5>Departure Point</h5>
                            <ol class="content-font">
                                <li>Molo Beverello, 80133 Napoli NA, Italy</li>
                                <li>Hotel Il Faro, Via Marina Piccola, 5, 80067 Sorrento NA, Italy</li>
                            </ol>
                            <h5>Departure Time</h5>
                            <p class="content-font">8:00 AM</p>
                        </div>
                        <hr>
                        <div class="itinerary-section mb-5">
                            <h4>Tour Itinerary</h4>
                            <div class="accordion" id="itineraryAccordion">
                                <!-- Day 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#day1" aria-expanded="true" aria-controls="day1">
                                            Day 1: Molo Beverello (4 stops)
                                        </button>
                                    </h2>
                                    <div id="day1" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#itineraryAccordion">
                                        <div class="accordion-body">
                                            <!-- Stop 1 -->
                                            <div class="mb-4">
                                                <h5><i class="bi bi-geo-alt"></i> Molo Beverello</h5>
                                                <p>We start our trip from the famous place Jemaa Lefna in center of
                                                    Marrakech, crossed the highest Atlas through pass (Tizi N Tichka).
                                                </p>
                                                <p><strong>Duration:</strong> 5 minutes<br>Admission Ticket Free</p>
                                            </div>
                                            <!-- Stop 2 -->
                                            <div class="mb-4">
                                                <h5><i class="bi bi-geo-alt"></i> Marina Piccola</h5>
                                                <p>We will visit the UNESCO World Heritage Site Ait Benhaddou. Located
                                                    in
                                                    the south of Morocco, it is an ighrem (fortified village) along the
                                                    former caravan route between the Sahara and Marrakech. The village
                                                    still
                                                    houses a few families living in ancient dwellings.</p>
                                                <p><strong>Duration:</strong> 1 hour 30 minutes<br>Admission Ticket Free
                                                </p>
                                            </div>
                                            <!-- Stop 3 -->
                                            <div class="mb-4">
                                                <h5><i class="bi bi-geo-alt"></i> Blue Grotto</h5>
                                                <p>Pass through the Ait Saouen Col in Anti Atlas.</p>
                                            </div>
                                            <!-- Stop 4 -->
                                            <div>
                                                <h5><i class="bi bi-geo-alt"></i> Villa San Michele</h5>
                                                <p>Crossed by the Draa valley, where there are over 2 million palms
                                                    along
                                                    the Draa river stretching to Senegal.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Day 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#day2" aria-expanded="false"
                                            aria-controls="day2">
                                            Day 2: Marina Piccola (1 stop)
                                        </button>
                                    </h2>
                                    <div id="day2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#itineraryAccordion">
                                        <div class="accordion-body">
                                            <h5><i class="bi bi-geo-alt"></i> Marina Piccola</h5>
                                            <p>Visit the picturesque Marina Piccola with stunning sea views and
                                                beautiful
                                                cliffs.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Day 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#day3" aria-expanded="false"
                                            aria-controls="day3">
                                            Day 3: Marina Piccola (1 stop)
                                        </button>
                                    </h2>
                                    <div id="day3" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#itineraryAccordion">
                                        <div class="accordion-body">
                                            <h5><i class="bi bi-geo-alt"></i> Marina Piccola</h5>
                                            <p>Enjoy a relaxing day at Marina Piccola with crystal-clear waters and a
                                                peaceful atmosphere.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="maps-section mb-5">
                            <h4>Maps</h4>
                        </div>
                        <div class="panoramic-video-section">
                            <h4>360° Panoramic Images and Videos</h4>
                        </div>
                    </div>
                    <div class="additional-info content-section">
                        <ul class="content-font mb-5">
                            <li>Confirmation will be received at time of booking</li>
                            <li>Not recommended for travelers with back problems</li>
                            <li>Not recommended for pregnant travelers</li>
                            <li>Infant seats available</li>
                            <li>Not wheelchair accessible</li>
                            <li>Children must be accompanied by an adult</li>
                            <li>Vegetarian option is available, please advise at time of booking if required</li>
                            <li>Minimum numbers apply</li>
                            <li>There is a possibility of cancellation after confirmation if the meteorological
                                conditions do not allow it</li>
                            <li>Stroller accessible</li>
                            <li>Service animals allowed</li>
                            <li>Near public transportation</li>
                            <li>Most travelers can participate</li>
                            <li>This tour/activity will have a maximum of 17 travelers</li>
                        </ul>
                        <div class="faq-section">
                            <h4 class="mb-3">FAQs</h4>
                            <div class="accordion" id="faqAccordion">
                                <!-- Question 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#question1" aria-expanded="true" aria-controls="question1">
                                            <span><i class="fa-regular fa-circle-question me-3"></i>What is the maximum
                                                group size during 2 Days 1 Night To Zagora Desert From Marrakech?</span>
                                        </button>
                                    </h2>
                                    <div id="question1" class="accordion-collapse collapse show"
                                        aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="answer">This activity will have a maximum of 17 travelers.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#question2" aria-expanded="true" aria-controls="question2">
                                            <span><i class="fa-regular fa-circle-question me-3"></i>What is the maximum
                                                group size during 2 Days 1 Night To Zagora Desert From Marrakech?</span>
                                        </button>
                                    </h2>
                                    <div id="question2" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="answer">This activity will have a maximum of 17 travelers.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#question3" aria-expanded="true" aria-controls="question3">
                                            <span><i class="fa-regular fa-circle-question me-3"></i>What is the maximum
                                                group size during 2 Days 1 Night To Zagora Desert From Marrakech?</span>
                                        </button>
                                    </h2>
                                    <div id="question3" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="answer">This activity will have a maximum of 17 travelers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="reviews content-section mt-5">
                        <div class="card p-4 shadow-sm d-flex mb-5">
                            <div class="row">
                                <div
                                    class="average-star col-4 text-center d-flex flex-column justify-content-center align-items-center">
                                    <h1 class="mb-0">4/5</h1>
                                    <div class="d-flex gap-1 justify-content-center">
                                        <span class="rating-star">★</span>
                                        <span class="rating-star">★</span>
                                        <span class="rating-star">★</span>
                                        <span class="rating-star">★</span>
                                        <span style="color: gray">★</span>
                                    </div>
                                    <p class="content-font">Based on <strong>150 reviews</strong></p>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="rating-label">5 <span class="text-gray">★</span></div>
                                        <div class="progress progress-container flex-grow-1 mx-3">
                                            <div class="progress-bar rating-bar" style="width: 28%"></div>
                                        </div>
                                        <div class="review-count">42 reviews</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="rating-label">4 <span class="text-gray">★</span></div>
                                        <div class="progress progress-container flex-grow-1 mx-3">
                                            <div class="progress-bar rating-bar" style="width: 14%"></div>
                                        </div>
                                        <div class="review-count">21 reviews</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="rating-label">3 <span class="text-gray">★</span></div>
                                        <div class="progress progress-container flex-grow-1 mx-3">
                                            <div class="progress-bar rating-bar" style="width: 24%"></div>
                                        </div>
                                        <div class="review-count">36 reviews</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="rating-label">2 <span class="text-gray">★</span></div>
                                        <div class="progress progress-container flex-grow-1 mx-3">
                                            <div class="progress-bar rating-bar" style="width: 0%"></div>
                                        </div>
                                        <div class="review-count">0 reviews</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="rating-label">1 <span class="text-gray">★</span></div>
                                        <div class="progress progress-container flex-grow-1 mx-3">
                                            <div class="progress-bar rating-bar" style="width: 0%"></div>
                                        </div>
                                        <div class="review-count">0 reviews</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="comment mb-5">
                            <div class="comment-body mt-5 mb-3">
                                <i class="fa-solid fa-circle-user"></i>
                                <textarea class="content-font" name="comment" id="comment" placeholder="Type anything"></textarea>
                            </div>
                            <div class="button-container d-flex justify-content-end">
                                <button class="comment-button">Comment</button>
                            </div>
                        </div>
                        <hr>
                        <div class="comment-section mb-5">
                            <div class="d-flex justify-items-center">
                                <img src="{{ asset('assets/avatar.png') }}" alt="Avatar" class="avatar">
                                <div class="rating-details">
                                    <div class="d-flex gap-1 mb-1">
                                        <span class="rating-star">★</span>
                                        <span class="rating-star">★</span>
                                        <span class="rating-star">★</span>
                                        <span class="rating-star">★</span>
                                        <span class="rating-star">★</span>
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
                                <img src="{{ asset('assets/avatar.png') }}" alt="Avatar" class="avatar">
                                <div class="rating-details">
                                    <div class="d-flex gap-1 mb-1">
                                        <span class="rating-star">★</span>
                                        <span class="rating-star">★</span>
                                        <span class="rating-star">★</span>
                                        <span class="rating-star">★</span>
                                        <span class="rating-star">★</span>
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
            </section>
            <section class="related">
                <h1 class="mb-5">Related tours</h1>
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
                <div class="tour__list row mb-5">
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
            $('#description-category').click();
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
    </script>
@endpush
