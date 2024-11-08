@extends('layouts.auth')
@section('auth-form')
    <div class="row d-flex align-items-center" style="height: 100vh;">
        <div class="col-4">
            <h1 class="mb-3">New Password</h1>
            <p class="mb-5">Create your new password</p>
            <form class="mb-3" id="change-password-form">
                <div class="form-group mb-3 password-field">
                    <label for="new-password">New Password</label>
                    <input type="password" class="form-control p-3 password" id="new-password" placeholder="New Password">
                    <span class="toggle-password">
                        <i class="fa-solid fa-eye" id="toggle-icon"></i>
                    </span>
                </div>
                <div class="form-group mb-3 password-field">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" class="form-control p-3 password" id="confirm-password"
                        placeholder="Confirm Password">
                    <span class="toggle-password-2">
                        <i class="fa-solid fa-eye" id="toggle-icon-2"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-end mb-3">
                    <a href="/forgot-password" class="text-decoration-none">Forgot password?</a>
                </div>
                <button type="submit" class="btn form-button w-100 p-3">Sign in</button>
            </form>
            <button type="submit" class="btn facebook-button w-100 p-3 mb-3">
                <span><i class="fa-brands fa-facebook me-3"></i></span>Sign in with Facebook
            </button>
            <p class="mt-3">Don't have an account? <a href="/signup" style="color: var(--primary-color);">Sign up</a></p>
        </div>
        <div class="col-1"></div>
        <div class="col-7 auth-image">
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $(".toggle-password").on("click", function() {
                const passwordInput = $("#new-password");
                const toggleIcon = $("#toggle-icon");

                if (passwordInput.attr("type") === "password") {
                    passwordInput.attr("type", "text");
                    toggleIcon.removeClass("fa-eye").addClass("fa-eye-slash");
                } else {
                    passwordInput.attr("type", "password");
                    toggleIcon.removeClass("fa-eye-slash").addClass("fa-eye");
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".toggle-password-2").on("click", function() {
                const passwordInput = $("#confirm-password");
                const toggleIcon = $("#toggle-icon-2");

                if (passwordInput.attr("type") === "password") {
                    passwordInput.attr("type", "text");
                    toggleIcon.removeClass("fa-eye").addClass("fa-eye-slash");
                } else {
                    passwordInput.attr("type", "password");
                    toggleIcon.removeClass("fa-eye-slash").addClass("fa-eye");
                }
            });
        });
    </script>
@endpush
