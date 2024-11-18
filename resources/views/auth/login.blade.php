@extends('layouts.auth')

@section('auth-form')
    <div class="row d-flex align-items-center" style="height: 100vh;">
        <div class="col-4">
            <h1 class="mb-3">Sign in</h1>
            <p class="mb-5">Welcome to NgaoduVietnam</p>
            <form action="{{ route('signin') }}" method="POST" class="mb-3" id="login-form">
                @csrf
                <div class="form-group mb-3">
                    <label for="signin-email">Email address</label>
                    <input type="text" class="form-control p-3" name="email" placeholder="Enter email">
                    <p class="p-error valid_error-email text-danger"></p>
                </div>
                <div class="form-group password-field">
                    <label for="signin-password">Password</label>
                    <input type="password" class="form-control p-3 password" name="password" placeholder="Password">
                    <span class="toggle-password">
                        <i class="fa-solid fa-eye" id="toggle-icon"></i>
                    </span>
                </div>
                <p class="p-error valid_error-password text-danger mb-3"></p>
                <div class="d-flex justify-content-end mb-3">
                    <a href="/forgot-password" class="text-decoration-none">Forgot password?</a>
                </div>
                <button type="submit" class="btn form-button w-100 p-3" id="login-submit-button">Sign in</button>
            </form>
            <button type="button" class="btn facebook-button w-100 p-3 mb-3">
                <span><i class="fa-brands fa-facebook me-3"></i></span>Sign in with Facebook
            </button>
            <p class="mt-3 text-center">
                Don't have an account?
                <a href="/signup" style="color: var(--primary-color);">Sign up</a>
            </p>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/toggle-password.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#login-submit-button').on('click', function(e) {
                e.preventDefault();
                $.ajax({
                    url: $('#login-form').attr('action'),
                    type: $('#login-form').attr('method'),
                    data: $('#login-form').serialize(),
                    success: function(response) {
                        showVanillaToast(response.message, response.alert);
                        setTimeout(function() {
                            window.location.href = '/';
                        }, 1000);
                    },
                    error: function(xhr, status, error) {
                        formValidAjax(xhr);
                    }
                })
            })
        });
    </script>
@endpush
