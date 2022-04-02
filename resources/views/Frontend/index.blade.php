@extends('frontend.layouts.main')

@section('main-container')
    <div class="banner">
        <div class="container">
            <img src="{{url('Frontend/images/banners.jpg')}}" alt="">
            <div class="banner-desc">
                <p>
                    Do you want to register your property online for free?
                </p>
                <div class="grid-container">
                    <div class="grid-item">
                        <h1>0%</h1>
                        <p>No Fees to register</p>
                    </div>
                    <div class="grid-item">
                        <h1>Nepal's</h1>
                        <p>First</p>
                    </div>
                    <div class="grid-item">
                        <h1>Secured</h1>
                        <p>Platform</p>
                    </div>
                </div>
                <h3>HamroGhar <span>0% Platform fees</span> helps to register hassle free</h3>
                <div class="banner-button">
                    <a href="">Register Your Property for FREE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="why-HamroGhar">
        <h3>Why HamroGhar?</h3>
    </div>
    <div class="grid-container">
        <div class="grid-item">
            <h3><i class="fa-solid fa-earth-asia"></i>Worldwide leader</h3>
            <p>HamroGhar is trusted around the world for its simple, reliable platform.</p>
        </div>
        <div class="grid-item">
            <h3><i class="fa-solid fa-square-envelope"></i> Expert Expertise</h3>
            <p>HamroGhar is trusted around the world for its simple, reliable platform.</p>
        </div>
        <div class="grid-item">
            <h3><i class="fa-solid fa-shield"></i> Safe and Secure</h3>
            <p>HamroGhar is trusted around the world for its simple, reliable platform.</p>
        </div>
        <div class="grid-item">
            <h3><i class="fa-solid fa-users"></i> Social Reach</h3>
            <p>HamroGhar is trusted around the world for its simple, reliable platform.</p>
        </div>
        <div class="grid-item">
            <h3><i class="fa-solid fa-hand-holding-dollar"></i> Trustable</h3>
            <p>HamroGhar is trusted around the world for its simple, reliable platform.</p>
        </div>
        <div class="grid-item">
            <h3><i class="fa-solid fa-location-arrow"></i>Direct to Fundraiser</h3>
            <p>HamroGhar is trusted around the world for its simple, reliable platform.</p>
        </div>
    </div>
    </div>
@endsection
