@extends('frontEnd.master')
@section('body')
<header class="header-section">
    <a href="{{asset('/')}}/frontEnd/./index.html" class="site-logo">
        <img src="{{asset('/')}}/frontEnd/img/logo.png" alt="">
    </a>
    <div class="menu-switch" id="menu-canvas-show">
        <i class="icon_menu"></i>
    </div>
</header>
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hero-item">
            <div class="hero-text">
                <div class="ht-cata">Nature</div>
                <h2>Photo Studio</h2>
                <p>Cassi – a creative lifestyle photo studio making emotional photography communicate a story. Creative lifestyle photo studio making emotional photography.</p>
                <a href="#" class="ht-btn">See More <i class="arrow_right"></i></a>
            </div>
            <div class="hi-bg set-bg" data-setbg="{{asset('/')}}/frontEnd/img/slider-1.jpg"></div>
        </div>
        <div class="hero-item">
            <div class="hero-text">
                <div class="ht-cata">Nature</div>
                <h2>Photo Studio</h2>
                <p>Cassi – a creative lifestyle photo studio making emotional photography communicate a story. Creative lifestyle photo studio making emotional photography.</p>
                <a href="#" class="ht-btn">See More <i class="arrow_right"></i></a>
            </div>
            <div class="hi-bg set-bg" data-setbg="{{asset('/')}}/frontEnd/img/slider-2.jpg"></div>
        </div>
        <div class="hero-item">
            <div class="hero-text">
                <div class="ht-cata">Nature</div>
                <h2>Photo Studio</h2>
                <p>Cassi – a creative lifestyle photo studio making emotional photography communicate a story. Creative lifestyle photo studio making emotional photography.</p>
                <a href="#" class="ht-btn">See More <i class="arrow_right"></i></a>
            </div>
            <div class="hi-bg set-bg" data-setbg="{{asset('/')}}/frontEnd/img/slider-3.jpg"></div>
        </div>
    </div>
</section>
@endsection
