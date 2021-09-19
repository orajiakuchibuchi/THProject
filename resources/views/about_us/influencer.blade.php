@extends('layouts.app')

@section('content')

    <!--<section class="sectionPT ">-->
    <!--    <div class="container">-->
    <!--        <div class="col-md-10 col_center">-->
    <!--            <div class="img_area">-->
    <!--                <img src="{{ asset('img/top-logo.png') }}">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <section class="sectionPT sectionPB">
        <div class="container">
            <div class="row alignCenter">
                <div class="col-md-6">
                    <h1 class="section_title section_title2 sndColor textUpper">vicomma Is For Influencers</h1>
                    <ul class="list_2">
                        <li>Connect With Vendors Who Need You</li>
                        <li>Spread Your Brand</li>
                        <li>Get Paid For Premium Content</li>
                        <li>Become What You Want To Be...</li>
                    </ul>
                    <p>Vicomma connects content providers and vendors through e-commerce & video content.</p>
                </div>
                <div class="col-md-6">
                    <div class="img_area tRight">
                        <img src="{{ asset('img/creative.jpg') }}">
                        <a href="" class="up Influencers">
                            <!--<i class="fas fa-play"></i>-->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionPB ser_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-4">
                    <div class="ser_itme">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="">
                                    <img src="{{ asset('img/ser4.png') }}">
                                </div>
                            </div>
                            <div class="col-md-7 mt-3">
                                <p>Create Exclusive <br> Content</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="ser_itme">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="">
                                    <img src="{{ asset('img/ser5.png') }}">
                                </div>
                            </div>
                            <div class="col-md-7 mt-3">
                                <p>Promote & Earn from Multiple Brands</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="ser_itme">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="">
                                    <img src="{{ asset('img/ser6.png') }}">
                                </div>
                            </div>
                            <div class="col-md-7 mt-3">
                                <p>Become A Brand Ambassador Easily</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionPT sectionPB counter_section mt-4" style="background-image: url('{{ asset('img/bg.jpg') }}');">
        <div class="container">
            <div class="col_center col-md-12">
                <h2 class="section_title2 section_title color_white mt-5">LAUNCHING IN...</h2>
                <div id="simple_timer"></div>
            </div>
        </div>
    </section>
    <section class="sectionPB sectionPT">
        <div class="container">
            <div class="row alignCenter">
                <div class="col-md-6">
                    <h1 class="section_title2 section_title sndColor">ALWAYS COOL TO BE THE FIRST</h1>
                </div>
                <div class="col-md-6">
                    <form class="con_form" method="post" action="{{ url()->current() }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="elijah.grant@example.com">
                            @include('shared.validation', ['name' => 'email'])
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Bessie Steward">
                            @include('shared.validation', ['name' => 'name'])
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="555-0104">
                            @include('shared.validation', ['name' => 'phone'])
                        </div>
                        <button type="submit" class="btn-primary btn btn-lg wd100per">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
    

@endsection

@push('scripts')
    <script>
        $("#phone").intlTelInput({separateDialCode: true});
    </script>
@endpush
