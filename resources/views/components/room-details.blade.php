<div class="modal fade" id="roomDetailsModal" tabindex="-1" aria-labelledby="roomDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h2>Family Suite</h2>
                <div class="room-details row">
                    <div class="col-6">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="text-danger mb-0">$240.00 <span
                                    style="color: gray; font-size: 15px;">/night</span></p>
                            <button class="btn outline-button select-btn">Select Room</button>
                        </div>
                        <div class="details__room__item mb-3">
                            <div class="details__room__item__image">
                                <img id="room-main-image" src="{{ asset('assets/beach.png') }}"
                                    alt="beach">
                                <button id="back" class="arrow" style="left: 10px;"><i
                                        class="fa-solid fa-chevron-left" style="color: white"></i></button>
                                <button id="forward" class="arrow" style="right: 10px;"><i
                                        class="fa-solid fa-chevron-right" style="color: white"></i></button>
                            </div>
                        </div>
                        <div class="row review__list">
                            <div class="col-3 review__room__item">
                                <div class="review__room__item__image" style="cursor: pointer;">
                                    <img src="{{ asset('assets/beach.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-3 review__room__item">
                                <div class="review__room__item__image" style="cursor: pointer;">
                                    <img src="{{ asset('assets/picture-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-3 review__room__item">
                                <div class="review__room__item__image" style="cursor: pointer;">
                                    <img src="{{ asset('assets/picture-7.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-3 review__room__item">
                                <div class="review__room__item__image" style="cursor: pointer;">
                                    <img src="{{ asset('assets/picture-9.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="room-details-information d-flex mb-2 gap-3">
                            <span><i class="fas fa-ruler-combined me-2"></i>90m<sup>2</sup></span>
                            <span><i class="fas fa-bed me-2"></i>2 Queen Bed</span>
                            <span><i class="fa-solid fa-user-group me-2"></i>4 Guest</span>
                        </div>
                        <hr>
                        <div class="room-description room-content-font">
                            <p>This air-conditioned room features large windows and a balcony with views of the city and sea. It contains a sitting area, flat-screen TV, a fridge and tea-and-coffee-making facilities. The bathroom has a shower and toilet.<br> Maximum occupancy is 2 adults and 1 child under the age of 2 years old in a crib. Please note that extra beds cannot be accommodated in this room type.</p>
                        </div>
                        <hr>
                        <div class="room-facilities">
                            <h5>Room Facilities: </h5>
                            <ul class="room-content-font check">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.review__room__item__image').click(function() {
                var newSrc = $(this).find('img').attr('src');
                $('#room-main-image').attr('src', newSrc);
            });
        });

        $('#back').click(function() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
            $('#room-main-image').attr('src', images[currentIndex]);
        });

        $('#forward').click(function() {
            currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
            $('#room-main-image').attr('src', images[currentIndex]);
        });
    </script>
@endpush
