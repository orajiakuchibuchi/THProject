<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{-- config('app.name', 'Laravel') --}} Creatives|Vendors|Meet & Earn</title>

    <!-- Styles -->
    @if(strpos(request()->route()->getName(), 'console.') !== false || strpos(request()->route()->getName(), 'login') !== false)

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/console/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('css/console/app.css') }}">
    @else

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome-animation.min.css') }}">
         <link rel="stylesheet" type="text/css" href="{{ asset('css/main.min.css') }}">
         <style>
         .hand_color
         {
             color: #64409F;
         }
         .main_heading
         {
             color:#93CB52;
         }
         </style>
    @endif
    @yield('style')
</head>
<body>

@if(strpos(request()->route()->getName(), 'console.') !== false || strpos(request()->route()->getName(), 'login') !== false)

    @guest
        @yield('content')
    @endguest

    @auth
        @include('layouts.sidebar')
        <div class="main">
            @include('layouts.header')
            <div class="page-content">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    @endauth
@else

    <div id="wrapper">
        <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-between">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo-color.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                         <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>
 Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" data-toggle="modal"
                                data-target="#aboutUsModal"><i class="fa fa-users" aria-hidden="true"></i>
 About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" data-toggle="modal"
                                data-target="#howItWorksModal"><i class="fa fa-question-circle" aria-hidden="true"></i>
 How it Works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" data-toggle="modal"
                               data-target="#signUpModal"><i class="fa fa-user-plus" aria-hidden="true"></i>
 Sign Up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

        @include('components.alert')
        @yield('content')
    </div>

    <!-- Modal -->
    <div class="modal fade" id="aboutUsModal" tabindex="-1" role="dialog" aria-labelledby="aboutUsModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutUsModalLabel" style="position: absolute;
    text-align: center;
    width: 100%;">About Us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!--<ul class="about_content_modal">-->
                    <!--    <li>A community where Vendors and Creatives meet and earn through content. </li>-->
                    <!--    <li>If you can CREATE content, then create it and get paid. </li>-->
                    <!--    <li>If you have a BRAND, PRODUCT or SERVICE that needs exposure then vicomma is for you. </li>-->
                    <!--    <li>Get matched, post and promote, and earn along the way all with vicomma.</li>-->
                    <!--</ul>-->
                     A community where Vendors and Creatives meet and earn through content.
If you can CREATE content, then create it and get paid.
If you have a BRAND, PRODUCT or SERVICE that needs exposure then vicomma is
for you.
Get matched, post and promote, and earn along the way all with vicomma.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="howItWorksModal" tabindex="-1" role="dialog" aria-labelledby="howItWorksModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="howItWorksModalLabel" style="position: absolute;
    text-align: center;
    width: 100%;"><i class="fa fa-question-circle-o faa-burst animated" aria-hidden="true"></i>
 How it Works</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <strong><i class="fa fa-asterisk main_heading" aria-hidden="true"></i> For Vendors</strong>
                    <ul class="about_content_modal fa-ul">
                        <li><i class="fa fa-hand-o-right hand_color"></i>
Create a Vendor Station </li>
                        <li><i class="fa fa-hand-o-right hand_color"></i> Add your product or service images to the station </li>
                        <li><i class="fa fa-hand-o-right hand_color"></i> Select a creative who will generate video content & promote it</li>
                        <li><i class="fa fa-hand-o-right hand_color"></i> Increase your sales</li>
                    </ul>
                    
             <strong><i class="fa fa-asterisk main_heading" aria-hidden="true"></i> For Creatives</strong>
                    <ul class="about_content_modal fa-ul">
                        <li><i class="fa fa-hand-o-right hand_color"></i> Register for free </li>
                        <li><i class="fa fa-hand-o-right hand_color"></i>	Discover tons of vendors who will pay for your content & influence </li>
                        <li><i class="fa fa-hand-o-right hand_color"></i>	Create content and promote it</li>
                        <li><i class="fa fa-hand-o-right hand_color"></i> Get paid</li>
                    </ul>
                    
                    
                    <strong><i class="fa fa-asterisk main_heading" aria-hidden="true"></i> For Viewers</strong>
                    <ul class="about_content_modal fa-ul">
                        <li><i class="fa fa-hand-o-right hand_color"></i> Watch and buy what you see in the content all on 1 platform</li>
                        <li><i class="fa fa-hand-o-right hand_color"></i> Or become a Vendor or Creative</li>
                    </ul>
<!--                    Vendors-->
<!--Create a Vendor Station-->
<!--Add merchandise images-->
<!--Get matched to creatives who generate content & promote it-->
<!--Increase your sales-->
<!--Creatives-->
<!--Discover tons of Vendors who will pay for your content & influence-->
<!--Create content and promote it-->
<!--Get paid-->
<!--Everyone else-->
<!--Watch and buy what you see in the content all on 1 platform-->
<!--Or join the wave-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUpModalLabel" style="position: absolute;
    text-align: center;
    width: 100%;">Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="sign-up-form">
                        <div class="form-group row">
                            <label for="email" class="col-sm-5 col-form-label">Email Address</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-5 col-form-label">Full Name</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
{{--                        <div class="form-group row">--}}
{{--                            <label for="phone" class="col-sm-4 col-form-label">Phone</label>--}}
{{--                            <div class="col-sm-8">--}}
{{--                                <input type="text" class="form-control" id="phone" name="phone">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group row">
                            <label for="is_creative" class="col-sm-5 col-form-label">I consider myself a</label>
                            <div class="col-sm-7">
                                <select class="form-control" id="is_creative" name="is_creative">
                                    <option value="">Choose...</option>
                                    <option value="Vendor/Merchant">Vendor/Merchant</option>
                                    <option value="Influncer">Influncer</option>
                                    <option value="Both">Both</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="is_creative" class="col-sm-5 col-form-label">If you chose influencer, please select the number of followers you have</label>
                            <div class="col-sm-7">
                                <select class="form-control" id="number_of_followers" name="number_of_followers">
                                    <option value="">Choose...</option>
                                    <option value="over 1 Million followers">over 1 Million followers</option>
                                    <option value="500k to 1 Million followers">500k to 1 Million followers</option>
                                    <option value="250k to 500k followers">250k to 500k followers</option>
                                    <option value="100k to 250k followers">100k to 250k followers</option>
                                    <option value="50k to 100k followers">50k to 100k followers</option>
                                    <option value="25k to 50k followers">25k to 50k followers</option>
                                    <option value="Less than 25k followers">Less than 25k followers</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <!--<div class="form-group row">-->
                        <!--    <label for="is_creative" class="col-sm-5 col-form-label">If you chose influencer, will you be able to make video content and include vendor products in your videos?</label>-->
                        <!--    <div class="col-sm-7">-->
                        <!--        <select class="form-control" id="video_content" name="video_content">-->
                        <!--            <option value="">Choose...</option>-->
                        <!--            <option value="Yes, absolutely">Yes, absolutely</option>-->
                        <!--            <option value="No">No</option>-->
                        <!--            <option value="Possibly">Possibly</option>-->
                        <!--            <option value="I don't understand">I don't understand</option>-->
                        <!--            <option value="Other">Other</option>-->
                        <!--        </select>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="form-group row">-->
                        <!--    <label for="is_creative" class="col-sm-5 col-form-label">If you chose vendor/merchant or BOTH(vendor/influencer), please select the type of item (s) that best describes what you intend to sell on Maxflix</label>-->
                        <!--    <div class="col-sm-7">-->
                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck1" name="intend_to_sell[]" value="Baby, Kids and Toys Goods">-->
                        <!--            <label class="custom-control-label" for="customCheck1">Baby, Kids and Toys Goods</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck2" name="intend_to_sell[]" value="Beauty, Health & Personal Care">-->
                        <!--            <label class="custom-control-label" for="customCheck2">Beauty, Health & Personal Care</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck3" name="intend_to_sell[]" value="Home and Kitchen Goods">-->
                        <!--            <label class="custom-control-label" for="customCheck3">Home and Kitchen Goods</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck4" name="intend_to_sell[]" value="Fashion">-->
                        <!--            <label class="custom-control-label" for="customCheck4">Fashion</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck5" name="intend_to_sell[]" value="Mobile Phone Accessories">-->
                        <!--            <label class="custom-control-label" for="customCheck5">Mobile Phone Accessories</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck6" name="intend_to_sell[]" value="Small Appliances">-->
                        <!--            <label class="custom-control-label" for="customCheck6">Small Appliances</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck7" name="intend_to_sell[]" value="Computing Accessories">-->
                        <!--            <label class="custom-control-label" for="customCheck7">Computing Accessories</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck8" name="intend_to_sell[]" value="Online Courses">-->
                        <!--            <label class="custom-control-label" for="customCheck8">Online Courses</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck9" name="intend_to_sell[]" value="Spa Service">-->
                        <!--            <label class="custom-control-label" for="customCheck9">Spa Service</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck10" name="intend_to_sell[]" value="Delivery & Meal Takeaway Services">-->
                        <!--            <label class="custom-control-label" for="customCheck10">Delivery & Meal Takeaway Services</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck11" name="intend_to_sell[]" value="Restaurants & Fast Food">-->
                        <!--            <label class="custom-control-label" for="customCheck11">Restaurants & Fast Food</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck12" name="intend_to_sell[]" value="Hotel Deals and Packages">-->
                        <!--            <label class="custom-control-label" for="customCheck12">Hotel Deals and Packages</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck13" name="intend_to_sell[]" value="Events & Fun">-->
                        <!--            <label class="custom-control-label" for="customCheck13">Events & Fun</label>-->
                        <!--        </div>-->

                        <!--        <div class="custom-control custom-checkbox">-->
                        <!--            <input type="checkbox" class="custom-control-input" id="customCheck14" name="intend_to_sell[]" value="Other">-->
                        <!--            <label class="custom-control-label" for="customCheck14">Other</label>-->
                        <!--        </div>-->



                                <!-- <select class="form-control" id="intend_to_sell" name="intend_to_sell">
                        <!--            <option value="">Choose...</option>-->
                        <!--            <option value="Baby, Kids and Toys Goods"></option>-->
                        <!--            <option value="Beauty, Health & Personal Care"></option>-->
                        <!--            <option value="Home and Kitchen Goods"></option>-->
                        <!--            <option value="Fashion"></option>-->
                        <!--            <option value="Mobile Phone Accessories"></option>-->
                        <!--            <option value="Small Appliances"></option>-->
                        <!--            <option value="Computing Accessories"></option>-->
                        <!--            <option value="Online Courses"></option>-->
                        <!--            <option value="Spa Service"></option>-->
                        <!--            <option value="Delivery & Meal Takeaway Services"></option>-->
                        <!--            <option value="Restaurants & Fast Food"></option>-->
                        <!--            <option value="Hotel Deals and Packages"></option>-->
                        <!--            <option value="Events & Fun"></option>-->
                        <!--            <option value="Other"></option>-->
                        <!--        </select> -->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="form-group row">
                            <label for="is_creative" class="col-sm-5 col-form-label">If you chose vendor/merchant or BOTH(vendor/influencer), can you provide images of your products and possibly videos for your products?</label>
                            <div class="col-sm-7">
                                <select class="form-control" id="images_and_videos" name="images_and_videos">
                                    <option value="">Choose...</option>
                                    <option value="I can provide images of my products">I can provide images of my products</option>
                                    <option value="I don't know how to make images of my products">I don't know how to make images of my products</option>
                                    <option value="I can make videos and provide images of my products">I can make videos and provide images of my products</option>
                                    <option value="I can provide videos of my products">I can provide videos of my products</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <!--<div class="form-group row">-->
                        <!--    <label for="is_creative" class="col-sm-5 col-form-label">What method would you prefer us to reach you for a follow-up regarding your vetting status?</label>-->
                        <!--    <div class="col-sm-7">-->
                        <!--        <select class="form-control" id="reaching_method" name="reaching_method">-->
                        <!--            <option value="">Choose...</option>-->
                        <!--            <option value="Email">Email</option>-->
                        <!--            <option value="Phone">Phone</option>-->
                        <!--            <option value="Any method">Any method</option>-->
                        <!--            <option value="Other">Other</option>-->
                        <!--        </select>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="form-group row">-->
                        <!--    <label for="is_creative" class="col-sm-5 col-form-label">Do you understand how to post content and add products to those videos on Maxflix?</label>-->
                        <!--    <div class="col-sm-7">-->
                        <!--        <select class="form-control" id="how_to_post_content" name="how_to_post_content">-->
                        <!--            <option value="">Choose...</option>-->
                        <!--            <option value="Yes, I do">Yes, I do.</option>-->
                        <!--            <option value="No, I need assistance, please email me the tutorial videos">No, I need assistance, please email me the tutorial videos</option>-->
                        <!--            <option value="I've seen the tutorial videos but I till need assistance">I've seen the tutorial videos but I till need assistance</option>-->
                        <!--            <option value="Other">Other</option>-->
                        <!--        </select>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="form-group row">-->
                        <!--    <label for="feedback" class="col-sm-5 col-form-label">Feedback</label>-->
                        <!--    <div class="col-sm-7">-->
                        <!--        <input type="text" class="form-control" id="feedback" name="feedback">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="form-group row">
                            <label for="suggestion_recommendation" class="col-sm-5 col-form-label">Is there any thing you would like to ask, suggest, or recommend?</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="suggestion_recommendation" name="suggestion_recommendation">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="sign-up-form-submit-btn">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endif
@include('layouts.footer')
@include('layouts.popups')

<!-- Scripts -->
@if(strpos(request()->route()->getName(), 'console.') !== false || strpos(request()->route()->getName(), 'login') !== false)

    <script src="{{ asset('js/console/plugins.js') }}"></script>
    <script src="{{ asset('js/console/app.js') }}"></script>
@else
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput-jquery.min.js"></script>

    <script src="{{ asset('js/jquery.syotimer.min.js') }}"></script>

    <script type="text/javascript">
        $('#simple_timer').syotimer({
            year: 2020,
            month: 11,
            day: 26,
            hour: 20,
            minute: 30
        });
    </script>
@endif

<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>

@stack('scripts')

<script>
    $(function(){
        $(document).on('click', '#sign-up-form-submit-btn', function(){
            $('div.alert').remove();
            $.ajax({
                type: 'POST',
                url: '{{ route('joinTheWave') }}',
                data: $('#sign-up-form').serialize(),
                success: function (response) {
                    if(response.hasOwnProperty('has_success') && response.has_success == true){
                        var successMessage = '<div class="alert alert-success icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line-circled"></i></button><p>Thank you for signing up. We’ll keep you posted of new events and contest.</p></div>';
                        $('#sign-up-form').prepend(successMessage);
                        $('#sign-up-form').trigger("reset");
                    }
                },
                error: function (response) {
                    switch(response.status){
                        case 400:
                            var errorMessage = '<div class="alert alert-danger icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line-circled"></i></button><p>An unknown error has been occured during this operation.</p></div>';
                            $('#sign-up-form').prepend(errorMessage);
                            break;
                    }
                }
            });
        });

        $('#sign-up-form').on('hidden.bs.modal', function (e) {
            $(this)
                .find("input,textarea,select")
                .val('')
                .end()
                .find("input[type=checkbox], input[type=radio]")
                .prop("checked", "")
                .end();
        })
        
        
        function getWidth() {
            return Math.max(
                document.body.scrollWidth,
                document.documentElement.scrollWidth,
                document.body.offsetWidth,
                document.documentElement.offsetWidth,
                document.documentElement.clientWidth
            );
        }
        console.log(getWidth());
        
        if(getWidth()<500){
            $('body').addClass("has-sidebar");
        }
    });
</script>
 <script src="{{ asset('js/main.min.js') }}"></script>
    {{-- 
    <!--<script>-->
    <!--    $(function(){-->
    <!--        $(document).on('click', '#event-email-form-submit-btn', function(){-->
    <!--            $.ajax({-->
    <!--                type: 'POST',-->
    <!--                url: "{{ route('event.email') }}",-->
    <!--                data: $('#event-email-form').serialize(),-->
    <!--                success: function (response) {-->
    <!--                    if(response.hasOwnProperty('has_success') && response.has_success == true){-->
    <!--                        var successMessage = '<div class="alert alert-success icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line-circled"></i></button><p>An email has been sent to your inbox.</p></div>';-->
    <!--                         $('#event-email-form').prepend(successMessage);-->
    <!--                     $('#event-email-form').trigger("reset");-->
    <!--                    }-->
    <!--                },-->
    <!--                error: function (response) {-->
    <!--                    switch(response.status){-->
    <!--                        case 422:-->
    <!--                        var errorMessage = '<div class="alert alert-danger icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line-circled"></i></button><p>Please Fill all fields.</p></div>';-->
    <!--                         $('#event-email-form').prepend(errorMessage);-->
    <!--                            break;-->
    <!--                        case 400:-->
    <!--                        var errorMessage = '<div class="alert alert-danger icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line-circled"></i></button><p>An unknown error has been occured during this operation.</p></div>';-->
    <!--                         $('#event-email-form').prepend(errorMessage);-->
    <!--                            break;-->
    <!--                    }-->
    <!--                }-->
    <!--            });-->
    <!--        });-->

    <!--        $('#event-email-form').on('hidden.bs.modal', function (e) {-->
    <!--            $(this)-->
    <!--            .find("input,textarea,select")-->
    <!--               .val('')-->
    <!--               .end()-->
    <!--            .find("input[type=checkbox], input[type=radio]")-->
    <!--               .prop("checked", "")-->
    <!--               .end();-->
    <!--        });-->
    <!--    });-->
    <!--</script>-->
--}}
@yield('script')
</body>
</html>













