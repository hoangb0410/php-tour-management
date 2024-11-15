@extends('layouts.auth')
@section('auth-form')
    <div class="row d-flex align-items-center" style="height: 100vh;">
        <div class="col-4">
            <h1 class="mb-3">Register</h1>
            <p class="mb-5">Welcome to NgaoduVietnam</p>
            <form action="{{ route('register') }}" method="POST" class="mb-3" id="signup-form">
                @csrf
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control p-3" name="first_name" id="signup-firstname"
                                placeholder="First name">
                            <p class="p-error valid_error-first_name text-danger"></p>
                        </div>
                        <div class="col">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control p-3" name="last_name" id="signup-lastname"
                                placeholder="Last name">
                            <p class="p-error valid_error-last_name text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="signup-email">Email address</label>
                    <input type="text" class="form-control p-3" name="email" id="signup-email"
                        placeholder="Enter email">
                    <p class="p-error valid_error-email text-danger"></p>
                </div>
                <div class="form-group mb-3 password-field">
                    <label for="signup-password">Password</label>
                    <input type="password" class="form-control p-3 password" name="password" id="signup-password"
                        placeholder="Password">
                    <span class="toggle-password">
                        <i class="fa-solid fa-eye" id="toggle-icon"></i>
                    </span>
                    <p class="p-error valid_error-password text-danger"></p>
                </div>
                <button type="submit" class="btn form-button w-100 p-3" id="signup-submit-form">Sign up</button>
            </form>

            <button type="submit" class="btn facebook-button w-100 p-3">
                <span><i class="fa-brands fa-facebook me-3"></i></span>Sign in with Facebook
            </button>
            <p class="mt-3">Member already? <a href="/login" style="color: var(--primary-color);">Log in</a></p>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/toggle-password.js') }}"></script>
    <script>
        // Submit form button event
        $('#signup-submit-form').on('click', function(e) {
            e.preventDefault();
            $('.p-error').text('');
            $.ajax({
                url: $('#signup-form').attr('action'),
                type: $('#signup-form').attr('method'),
                data: $('#signup-form').serialize(),
                success: function(response) {
                    showVanillaToast(response.message, response.alert)
                },
                error: function(xhr, status, error) {
                    formValidAjax(xhr);
                }
            })
        })
    </script>
@endpush
