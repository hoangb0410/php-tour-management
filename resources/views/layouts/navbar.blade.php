<header class="fixed-header">
    <nav class="navbar navbar-expand-lg {{ $navbar_type == 'light' ? 'light-navbar' : 'dark-navbar' }}">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo"
                    src="{{ $navbar_type == 'light' ? asset('assets/logo-white.png') : asset('assets/logo-black.png') }}"
                    alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-5">
                    <li class="nav-item">
                        <a class="nav-link {{ $navbar_type == 'light' ? 'light' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $navbar_type == 'light' ? 'light' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $navbar_type == 'light' ? 'light' : '' }}"
                            href="{{ route('list-tour') }}">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $navbar_type == 'light' ? 'light' : '' }}"
                            href="{{ route('list-hotel') }}">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $navbar_type == 'light' ? 'light' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link {{ $navbar_type == 'light' ? 'light' : '' }}"
                                href="{{ route('login') }}">Login</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item dropdown {{ $navbar_type == 'light' ? 'light' : '' }}">
                            <a class="nav-link dropdown-toggle d-flex align-items-center gap-1" href="#"
                                id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-circle-user" style="font-size: 1.5rem;"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Profile</a>
                                </li>
                                <li>
                                    <form id="logoutButton" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    $(document).on('scroll', function() {
        const $navbar = $('.navbar');
        const $logo = $('.navbar-brand .logo');

        if ($(window).scrollTop() > 50) {
            $navbar.addClass('scrolled');
            $logo.attr('src', "{{ asset('assets/logo-black.png') }}");
        } else {
            $navbar.removeClass('scrolled');
            $logo.attr('src',
                "{{ $navbar_type == 'light' ? asset('assets/logo-white.png') : asset('assets/logo-black.png') }}"
                );
        }
    });

    $('#logoutButton').on('click', function(e) {
        e.preventDefault();
        $.ajax({
            url: $('#logoutButton').attr('action'),
            type: $('#logoutButton').attr('method'),
            data: {
                _token: "{{ csrf_token() }}",
            },
            success: function(response) {
                showVanillaToast(response.message, response.alert);
                setTimeout(function() {
                    window.location.href = '/';
                }, 1000);
            },
            error: function(xhr, status, error) {
                formValidAjax(xhr);
            }
        });
    });
</script>
