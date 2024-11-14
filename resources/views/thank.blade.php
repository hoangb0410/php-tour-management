@extends('layouts.master')
@section('content')
    <div class="thank">
        <div class="thank-container">
            <h1 class="mb-3">Thank you!</h1>
            <p class="mb-0">Your order has been successfully ordered.</p>
            <p class="mb-5">Order information has been emailed to you. Thank you!</p>
            <a class="btn form-button" href="{{ route('home') }}">Back to our home</a>
        </div>
    </div>
@endsection
