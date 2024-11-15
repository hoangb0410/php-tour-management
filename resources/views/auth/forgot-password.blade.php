@extends('layouts.auth')
@section('auth-form')
    <div class="row d-flex align-items-center" style="height: 100vh;">
        <div class="col-4">
            <h1 class="mb-3">Forgot Password</h1>
            <p class="mb-5">Enter the e-mail address associated with the account. We'll e-mail a link to reset your
                password.</p>
            <form class="mb-3" id="forgot-password-form">
                <div class="form-group mb-3">
                    <label for="forgot-password-email">Email address</label>
                    <input type="text" class="form-control p-3" id="forgot-password-email" placeholder="Enter email">
                </div>
                <button type="submit" class="btn form-button w-100 p-3">Send Request</button>
            </form>
            <a href="/login" class="btn outline-button w-100 p-3">Back to sign in</a>
        </div>
    </div>
@endsection
