<header class="fixed-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo" src="{{ asset('assets/logo-white.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-5">
                    <li class="nav-item">
                        <a class="nav-link light" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link light" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link light" href="{{ route('list-tour') }}">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link light" href="{{ route('list-hotel') }}">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link light" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link light" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    $(document).on('scroll', function() {
        const $navbar = $('.navbar');
        const $logo = $('.navbar-brand .logo');
        const $navLinks = $('.nav-link');

        if ($(window).scrollTop() > 50) {
            $navbar.addClass('scrolled');
            $logo.attr('src', "{{ asset('assets/logo-black.png') }}");
            $navLinks.css('color', 'black');
        } else {
            $navbar.removeClass('scrolled');
            $logo.attr('src', "{{ asset('assets/logo-white.png') }}");
            $navLinks.css('color', 'white');
        }
    });
</script>
