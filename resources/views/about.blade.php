@extends('layouts.master')
@section('content')
    @include('layouts.header')
    <section class="banner" style="height: 300px;">
        <div class="container">
            <div class="d-flex" style="width: 100%; justify-content: center;">
                <h1>About us</h1>
            </div>
    </section>

    <div class="main-content">
        <div class="container">
            <div class="row content" style="margin-top: 100px">
                <div class="col-sm-6" style="position: relative;">
                    @include('components.intro')
                </div>
                <div class="col-sm-6">
                    <h1 class="mb-5">With NgaoduVietnam, <br> immerses you in majestic <br> space and unique cultural <br>
                        features</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem id ut eum. Quam temporibus
                        reprehenderit cupiditate blanditiis nisi sint reiciendis? Cum nobis nemo amet. Mollitia aliquid
                        pariatur quae cum tenetur.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem id ut eum. Quam temporibus
                        reprehenderit cupiditate blanditiis nisi sint reiciendis? Cum nobis nemo amet. Mollitia aliquid
                        pariatur quae cum tenetur.</p>
                </div>
            </div>
            <div class="row content">
                <div class="col-sm-6">
                    <h1 class="mb-5">With NgaoduVietnam, <br> immerses you in majestic <br> space and unique cultural <br>
                        features</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem id ut eum. Quam temporibus
                        reprehenderit cupiditate blanditiis nisi sint reiciendis? Cum nobis nemo amet. Mollitia aliquid
                        pariatur quae cum tenetur.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem id ut eum. Quam temporibus
                        reprehenderit cupiditate blanditiis nisi sint reiciendis? Cum nobis nemo amet. Mollitia aliquid
                        pariatur quae cum tenetur.</p>
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('assets/picture-3.png') }}" alt="" style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="content">
                <img src="{{ asset('assets/pic-6.png') }}" alt=""
                    style="width: 100%; height: auto; object-fit: cover;">
            </div>

            <div class="row content">
                <div class="col-sm-6 mb-3">
                    <h1>Experience the traditional cultural beauties of Vietnam</h1>
                </div>
                <div class="row mb-5">
                    <div class="col-sm-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus amet fugiat veniam perferendis
                            adipisci aliquam, officiis assumenda suscipit corrupti inventore debitis maiores architecto
                            dolorem. Delectus vitae dolor doloribus enim minima?</p>
                    </div>
                    <div class="col-sm-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus amet fugiat veniam perferendis
                            adipisci aliquam, officiis assumenda suscipit corrupti inventore debitis maiores architecto
                            dolorem. Delectus vitae dolor doloribus enim minima?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <img src="{{ asset('assets/picture-8.png') }}" alt="" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6" style="display: flex; flex-direction: column; justify-content: space-between;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio.
                            Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque phasellus
                            donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie egestas leo ut.</p>
                        <img src="{{ asset('assets/picture-9.png') }}" alt="" style="width: 100%; height: auto; ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
