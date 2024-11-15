@extends('layouts.auth')
@section('auth-form')
    <div class="row d-flex align-items-center" style="height: 100vh;">
        <div class="col-4">
            <h1 class="mb-3">Register</h1>
            <p class="mb-5">Welcome to NgaoduVietnam</p>
            <form class="mb-3" id="signup-form">
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control p-3" id="firstname" placeholder="First name">
                        </div>
                        <div class="col">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control p-3" id="lastname" placeholder="Last name">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="signup-email">Email address</label>
                    <input type="text" class="form-control p-3" id="signup-email" placeholder="Enter email">
                </div>
                <div class="form-group mb-3 password-field">
                    <label for="signup-password">Password</label>
                    <input type="password" class="form-control p-3 password" id="signup-password" placeholder="Password">
                    <span class="toggle-password">
                        <i class="fa-solid fa-eye" id="toggle-icon"></i>
                    </span>
                </div>
                <button type="submit" class="btn form-button w-100 p-3">Sign up</button>
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
@endpush
