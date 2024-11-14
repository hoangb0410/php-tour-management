@extends('layouts.master')
@section('content')
    <section class="booking-header mb-3">
        <div class="container">
            <h1>Booking Submission</h1>
        </div>
    </section>
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <hr>
                    <section class="intro mb-5">
                        <h3>Traveler Details</h3>
                        <p>Information we need to confirm your tour or activity</p>
                    </section>
                    <section class="leader-info mb-5">
                        <h4 class="mb-3">Lead Traveler (Adult)</h4>
                        <div class="form-group mb-3">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="firstname">First Name <span class="required-star">*</span></label>
                                    <input type="text" class="form-control p-3" id="firstname" placeholder="First name"
                                        required>
                                </div>
                                <div class="col">
                                    <label for="lastname">Last Name <span class="required-star">*</span></label>
                                    <input type="text" class="form-control p-3" id="lastname" placeholder="Last name"
                                        required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="email">Email <span class="required-star">*</span></label>
                                    <input type="text" class="form-control p-3" id="email"
                                        placeholder="email@domain.com" required>
                                </div>
                                <div class="col">
                                    <label for="phone-number">Phone Number <span class="required-star">*</span></label>
                                    <input type="text" class="form-control p-3" id="phone-number"
                                        placeholder="Your Phone" required>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="address mb-5">
                        <h4 class="mb-3">Address</h4>
                        <label for="address">Your Address</label>
                        <input type="text" class="form-control p-3 mb-3" id="address" placeholder="Your Address">
                        <div class="form-group mb-3">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control p-3" id="city" placeholder="Your City">
                                </div>
                                <div class="col">
                                    <label for="state">State/Province/Region</label>
                                    <input type="text" class="form-control p-3" id="state"
                                        placeholder="Your State/Province/Region">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="email">Zip Code/ Postal Code</label>
                                    <input type="text" class="form-control p-3" id="email"
                                        placeholder="Zip Code/ Postal Code">
                                </div>
                                <div class="col">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control p-3" id="country"
                                        placeholder="Your Country">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="special-requirement mb-5">
                        <h4>Special Requirement</h4>
                        <textarea class="content-font" name="special-requirement" id="special-requirement" placeholder="Special Requirement"></textarea>
                    </section>
                    <hr>
                    <section class="payment mb-5">
                        <h3>Payment Menthod</h3>
                        <p>Pay securely—we use SSL encryption to keep your data safe</p>
                        <div class="payment-selections mb-3">
                            <div class="payment-select">
                                <input type="checkbox" id="credit-card">
                                <label for="credit-card">Credit Card</label>
                                <img src="{{ asset('assets/payment.png') }}" alt="">
                            </div>
                            <div class="payment-select">
                                <input type="checkbox" id="paypal">
                                <label for="paypal">Paypal</label>
                                <img src="{{ asset('assets/paypal.png') }}" alt="">
                            </div>
                        </div>
                        <ul>
                            <li class="mb-2">You will be charged the total amount once your order is confirmed.</li>
                            <li class="mb-2">If confirmation isn't received instantly, an authorization for the total
                                amount will be held until your booking is confirmed.</li>
                            <li class="mb-2">You can cancel for free up to 24 hours before the day of the experience,
                                local time.</li>
                            <li class="mb-2">By clicking 'Pay with PayPal,' you are acknowledging that you have read and
                                are bound by Ojimah's Customer Terms of Use, Privacy Policy, plus the tour operator's rules
                                & regulations (see the listing for more details).
                            </li>
                        </ul>
                    </section>
                    <button class="btn form-button p-3 w-100 mb-5">
                        Complete Booking
                    </button>
                </div>
                <div class="col-1"></div>
                <div class="col-4">
                    <form class="tour-booking-form mt-3">
                        <p><strong>TownePlace Suites Gaithersburg by Marriott</strong></p>
                        <p><i class="fa-solid fa-location-dot me-2"></i>Vungtau City, Baria-Vungtau</p>
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
                        <div class="d-flex justify-content-between">
                            <p><span style="color: var(--primary-color)">1 x </span>Standard Room</p>
                            <p>$120.00</p>
                        </div>
                        <p style="color: gray">Add-ons:</p>
                        <div class="d-flex justify-content-between mb-2">
                            <p>Breakfast</p>
                            <p>$20.00</p>
                        </div>
                        <div>

                        </div>
                        <div class="discount d-flex gap-2">
                            <input class="form-control p-3" type="text" id="promo-code" placeholder="Promo Code">
                            <button class="btn outline-button p-3">Apply</button>
                        </div>
                    </form>
                    <div class="total-booking">
                        <p>Total</p>
                        <p><strong>$450.00</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
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
    </script>
@endpush
