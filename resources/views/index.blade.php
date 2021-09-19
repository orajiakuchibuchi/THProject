@extends('layouts.app')

@section('content')

    <section class="sectionPT sectionPB comming_section" style="background-image: url({{ asset('img/home.jpeg') }});">
        <div class="container">
            <div class="col-md-10 col_center">
                <p class="comming_text">Coming soon, follow us</p>
                <ul class="social">
                    <li><a href="https://twitter.com/officialvicomma" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/officialvicomma" target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
                    <li><a href="https://www.instagram.com/officialvicomma/" target="_blank"> <i class="fab fa-instagram"></i></a>
                    </li>
                    <li><a href="https://www.tiktok.com/@officialvicomma?lang=en" target="_blank"> <i class="fab fa-tiktok"></i></a>
                    </li>
                </ul>
                <img src="{{ asset('img/top-logo.png') }}" class="logo_comming">
                <h6 class="heading">A community for Vendors & Creatives <br> to meet and earn big</h6>
                <p class="bottom_text">vendors, merchants, creatives, influencers, comedians, musicians, <br> find each other and the world finds us all…</p>
                <button class="btn btn-primary btn-lg btn-rounded" data-toggle="modal"
                               data-target="#signUpModal">Join the Wave</button>
            </div>
        </div>
        
    </section>
    


@endsection
