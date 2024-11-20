<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/admin/user') }}">NgaoDuVietnam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @auth
                    @admin
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/user">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/tour">Tour</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Hotel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Room</a>
                        </li>
                    @endadmin
                @endauth
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <span class="nav-link">Hello, {{ Auth::user()->first_name }}</span>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-1" href="#" id="userDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle-user" style="font-size: 1.5rem;"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li>
                                <a class="dropdown-item" href="#">Profile</a>
                            </li>
                            <li>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
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

<script>
    $('#logout-form').on('click', function(e) {
        e.preventDefault();
        $.ajax({
            url: $('#logout-form').attr('action'),
            type: $('#logout-form').attr('method'),
            data: {
                _token: "{{ csrf_token() }}",
            },
            success: function(response) {
                showVanillaToast(response.message, response.alert);
                setTimeout(function() {
                    window.location.href = '/login';
                }, 1000);
            },
            error: function(xhr, status, error) {
                formValidAjax(xhr);
            }
        });
    });
</script>
