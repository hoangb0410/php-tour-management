@extends('layouts.master')
@section('content')
    @include('layouts.light-header')
    <section class="banner" style="height: 568px; background-image: url('{{ asset('assets/banner-3.png') }}');">
        <div class="container">
            <h1>Contact us</h1>
    </section>
    <section class="path" style="margin-top: 50px; margin-bottom: 50px">
        <div class="container">
            <p><a href="{{ route('home') }}">Home</a> <span><i class="bi bi-dot" style="color: gray"></i></span> Contact us</p>
        </div>
    </section>
    <section class="main-content">
        <div class="container">
            <div class="row h-100">
                <div class="col-5 d-flex flex-column">
                    <h1>We'd love to hear from you</h1>
                    <p class="mb-5">Send us a message and we'll respond as soon as possible</p>
                    <form action="" id="contact-form" class="mb-5">
                        <input type="text" class="form-control p-3 mb-3" id="name" placeholder="Your Name">
                        <input type="text" class="form-control p-3 mb-3" id="email" placeholder="Your Email">
                        <input type="text" class="form-control p-3 mb-3" id="phone" placeholder="Your Phone">
                        <textarea name="message" id="message" class="w-100 mb-5 p-3" rows="10" placeholder="Message"></textarea>
                        <div class="d-flex flex-column">
                            <img src="{{ asset('assets/robot.png') }}" alt="" class="mb-3">
                            <button type="submit" class="form-button">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-1"></div>
                <div class="col-6 mb-5">
                    <div class="contact-main-image">
                        <img src="{{ asset('assets/pic-1.png') }}" alt="" class="img-fluid">
                        <div class="contact-second-image">
                            <img src="{{ asset('assets/company-info.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="maps">
            <img class="w-100" src="{{asset('assets/contact-map.png')}}" alt="">
        </div>
    </section>
    @include('layouts.footer')
@endsection
