<footer class="text-white" style="background-color: #1c1c1d;">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-5">
                <div class="d-block mb-3">
                    <img class="logo" src="{{ asset('assets/logo-white.png') }}" alt="logo">
                </div>
                <div class="d-block">
                    <a href="#"><i class="fa-brands fa-facebook me-3"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram me-3"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-sm-7 mt-5 mb-3">
                <div class="row d-flex">
                    <div class="col-sm-4">
                        <a class="d-block mb-3" href="{{ url('/') }}">Home</a>
                        <a class="d-block mb-3" href="{{ route('about') }}">About</a>
                        <a class="d-block mb-3" href="{{ route('list-tour') }}">Tours</a>
                        <a class="d-block mb-3" href="{{ route('list-hotel') }}">Hotels</a>
                        <a class="d-block mb-3" href="{{ route('contact') }}">Contact</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="d-block mb-3" href="#">Partner with us</a>
                        <a class="d-block mb-3" href="#">Terms & Conditions</a>
                        <a class="d-block mb-3" href="{{ route('privacy-policy') }}">Privacy Policy</a>
                        <a class="d-block mb-3" href="#">Guest Policy</a>
                    </div>
                    <div class="col-sm-4">
                        <p class="d-block mb-3"><i class="fa-solid fa-location-dot me-3"></i> Lilama 10 Tower, 56 To
                            Huu,
                            Trung Van, Nam Tu Liem, Ha Noi</p>
                        <p class="d-block mb-3"><i class="fa-regular fa-envelope me-3"></i> hello@adamotravel.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright d-flex align-items-center justify-content-center" style="background-color: black">Copyright ©
        We.travel. All rights reserved</div>
</footer>
