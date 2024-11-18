@extends('layouts.auth')
@section('auth-form')
    <div class="row d-flex align-items-center" style="height: 100vh;">
        <div class="col-4">
            <h1 class="mb-3">Forgot Password</h1>
            <p class="mb-5">Enter the e-mail address associated with the account. We'll e-mail a link to reset your
                password.</p>
            <form class="mb-3" action="{{ route('sendResetLink') }}" method="POST" id="forgot-password-form">
                @csrf
                <div class="form-group mb-3">
                    <label for="forgot-password-email">Email address</label>
                    <input type="email" name="email" class="form-control p-3" id="forgot-password-email"
                        placeholder="Enter email">
                    <p class="p-error valid_error-email text-danger"></p>
                </div>
                <button type="submit" class="btn form-button w-100 p-3" id="send-reset-button">Send Request</button>
            </form>
            <a href="/login" class="btn outline-button w-100 p-3">Back to sign in</a>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#send-reset-button').on('click', function(e) {
                e.preventDefault();
                $.ajax({
                    url: $('#forgot-password-form').attr('action'),
                    type: $('#forgot-password-form').attr('method'),
                    data: $('#forgot-password-form').serialize(),
                    success: function(response) {
                        showVanillaToast(response.message, response.alert);
                    },
                    error: function(xhr, status, error) {
                        console.log(error)
                        formValidAjax(xhr);
                    }
                })
            })
        });
    </script>
@endpush
