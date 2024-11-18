@extends('layouts.auth')
@section('auth-form')
    <div class="row d-flex align-items-center" style="height: 100vh;">
        <div class="col-4">
            <h1 class="mb-3">New Password</h1>
            <p class="mb-5">Create your new password</p>
            <form action="{{ route('resetPassword') }}" method="POST" class="mb-3" id="change-password-form">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group password-field">
                    <label for="new-password">New Password</label>
                    <input type="password" class="form-control p-3 password" name="password" id="new-password"
                        placeholder="New Password">
                    <span class="toggle-password">
                        <i class="fa-solid fa-eye" id="toggle-icon"></i>
                    </span>
                </div>
                <p class="p-error valid_error-password text-danger mb-3"></p>

                <div class="form-group password-field">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" class="form-control p-3 password" name="password_confirmation"
                        id="confirm-password" placeholder="Confirm Password">
                    <span class="toggle-password-2">
                        <i class="fa-solid fa-eye" id="toggle-icon-2"></i>
                    </span>
                </div>
                <p class="p-error valid_error-password_confirmation text-danger mb-3"></p>
                <button type="submit" class="btn form-button w-100 p-3" id="reset-password-button"> Reset Password</button>
            </form>
            <button type="submit" class="btn facebook-button w-100 p-3 mb-3">
                <span><i class="fa-brands fa-facebook me-3"></i></span>Sign in with Facebook
            </button>
            <p class="mt-3">Don't have an account? <a href="/signup" style="color: var(--primary-color);">Sign up</a></p>
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

            $('#reset-password-button').on('click', function(e) {
                e.preventDefault();
                $.ajax({
                    url: $('#change-password-form').attr('action'),
                    type: $('#change-password-form').attr('method'),
                    data: $('#change-password-form').serialize(),
                    success: function(response) {
                        showVanillaToast(response.message, response.alert);
                        setTimeout(function() {
                            window.location.href = '/login';
                        }, 1000);
                    },
                    error: function(xhr, status, error) {
                        formValidAjax(xhr);
                    }
                })
            });
        });
    </script>
@endpush
