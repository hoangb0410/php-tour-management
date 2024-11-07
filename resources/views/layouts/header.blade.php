<div class="fixed-header">
    <div class="container">
        <div class="d-flex justify-content-between nav-bar">
            <div>
                <a href="{{ url('/') }}">
                    <img class="logo" src="{{ asset('assets/logo-black.png') }}" alt="logo">
                </a>
            </div>
            <div class="d-flex align-items-center gap-5">
                <a href="/">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="#">Tours</a>
                <a href="#">Hotels</a>
                <a href="#">Contact</a>
                <a href="#">Login</a>
            </div>
        </div>
    </div>
</div>
