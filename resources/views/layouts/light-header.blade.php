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
    document.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        const logo = document.querySelector('.navbar-brand .logo');
        const navLinks = document.querySelectorAll('.nav-link');

        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
            logo.src = "{{ asset('assets/logo-black.png') }}";
            navLinks.forEach(link => link.style.color = 'black');
        } else {
            navbar.classList.remove('scrolled');
            logo.src = "{{ asset('assets/logo-white.png') }}";
            navLinks.forEach(link => link.style.color = 'white');
        }
    });
</script>
