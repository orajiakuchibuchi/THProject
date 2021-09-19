@extends('layouts.app')

@section('content')

    <section>
        <section class="hero_section sectionPT sectionPB">
            <div class="container">
                <div class="row alignCenter">
                    <div class="col-md-7">
                        <img class="logo" src="{{ asset('img/top-logo.png') }}">
                        <h2 class="heading cover_heading">MAKE 10X PROFIT IN YOUR TODAY'S BUSINESS</h2>
                        <!--<p class="cover_sub">Proven Ways To Grow Your Business Faster On The Internet</p>-->
                        <ul class="rating mb-3">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <ul class="hero_list">
                            <li>Discover new ways to grow your business</li>
                            <li>Make 10X more profit today.</li>
                        </ul>
                        <button class="btn btn-primary call_action_btn  col-md-3 col-lg-2" data-toggle="modal"
                                data-target="#ebookModal">Get the ebook</button>
                    </div>
                    <div class="col-md-5">
                        <div class="img_area right_sec">
                            <img  src="{{ asset('img/cover2.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sectionPB list_section left_art">
            <div class="container">
                <div class="row alignCenter">
                    <div class="col-md-5">
                        <div class="img_area">
                            <img  src="{{ asset('img/cover2.png') }}">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <ul class="tick_list">
                            <li><i class="fas fa-check icon"></i>The world has experienced one of the worst event ever to be recorded in history. This event affected every business.</li>
                            <li><i class="fas fa-check icon"></i>Right now you want to take your business online, because you believe it will save you.</li>
                            <li><i class="fas fa-check icon"></i>YES!!! internet has saved so many business, infact only internet based businesses survived this pandemic.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="sectionPT sectionPB gr_section">
        <div class="container bg_gradient p40">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="heading section_title">VICOMMA BRINGS TO YOU THE NEW ADDRESS</h1>
                    <ul class="tick_list">
                        <li><i class="fas fa-check icon"></i>Everyday more businesses are moving to the internet.</li>
                        <li><i class="fas fa-check icon"></i>Switching to the internet is the new address.</li>
                    </ul>
                </div>
                <div class="col-md-4 right_sec ">
                    <div class="textRight">
                        <img width="180" src="{{ asset('img/logo.png') }}">
                    </div>
                    <button class="btn-primary btn-lg btn-rounded" data-toggle="modal"
                                data-target="#ebookModal">Get Your Copy Now</button>
                </div>
            </div>
        </div>
    </section>

    <section class="sectionPT sectionPB list_section right_art">
        <div class="container">
            <div class="row alignCenter">
                <div class="col-md-7">
                    <h1 class="section_title sndColor textUpper">How will this book be of  <br> benefit to you</h1>
                    <ul class="tick_list">
                        <li><i class="fas fa-check icon"></i>Give you an edge in running a store on the internet</li>
                        <li><i class="fas fa-check icon"></i>How to make sales Online with Little Effort</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <div class="img_area">
                        <img  src="{{ asset('img/cover2.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sectionPT sectionPB">
        <div class="container">
            <div class="col-md-8 col_center">
                <h1 class="section_title heading textUpper sndColor lg_gap">About Authors</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row author_item">
                        <div class="col-md-3">
                            <div class="img_area">
                                <img src="{{ asset('img/author/2.png') }}">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3 class="author_name">Babatunde O. Odeniyi </h3>
                            <p>B.O.E. Odeniyi is an experienced engineer and entrepreneur. For nearly 20 years, Mr. Odeniyi has been involved in several industries from commercial to federal projects as a contractor as well as a consultant. All the while, he has also been operating his own company, EMG LLC./Dotweinc Ventures Limited. </p>


                            <p> Mr. Odeniyi has dedicated years to entrepreneurial endeavors and in the process has developed businesses in the technology, transportation, housing, smart devices, and entertainment industries both in the United States and Africa. He is a force to be reckoned with.</p>

                            <p>His latest endeavor, Vicomma, part of the Maxflix Companies, is on target to be a game changer. To learn more about Mr. Odeniyi and his endeavors, visit the company page at www.myendpoint.com.</p>

                            <p class="intro_paragraph">“ Less talk, more action.” – B.O.E. Odeniyi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row author_item">
                        <div class="col-md-3">
                            <div class="img_area">
                                <img src="{{ asset('img/author/1.png') }}">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3 class="author_name">Justus Nwosu </h3>


                            <p>Deriving his passion from his encounter with the computer system when he was 7years old,</p>

                            <p>Justus Nwosu is a Tech Entrepreneur focused in Digital Development (web & app), Strategic Digital Marketing.</p>

                            <p>He is the founder of Hurricane Digital Agency and Joooka, a Tech Business Coach, He has helped developed and managed multiple Internet businesses across Nigeria.</p>

                            <p>He believes he is a super human in service and he also believes in making simple things great.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionPT sectionPB bg_gradient">
        <div class="container">
            <div class="col-md-10 col_center">
                <ul class="rating mb-3">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                </ul>
                <h1 class="section_title section_title1 color_white">MAKE 10X PROFIT <br> IN YOUR TODAY'S BUSINESS</h1>
                <p class="color_white  text2 mb35">Proven Ways To Grow Your Business <br> Faster On The Internet</p>
                <button class="btn-primary btn-lg btn" data-toggle="modal"
                                data-target="#ebookModal">Get the ebook</button>
            </div>
        </div>
    </section>
    
    <!-- Modal -->
    <div class="modal fade" id="ebookModal" tabindex="-1" role="dialog" aria-labelledby="ebookModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ebookModalLabel" style="position: absolute;
    text-align: center;
    width: 100%;">Get the ebook</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="ebook-form">
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">Full Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ig_handle" class="col-sm-4 col-form-label">IG Handle(if applicable)</label>
                            <div class="col-sm-8">
                                <!-- @<input type="text" class="form-control" id="ig_handle" name="ig_handle"> -->

                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="ig_handle">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="ig_handle" name="ig_handle">
                                  </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="is_creative" class="col-sm-4 col-form-label">I consider myself a</label>
                            <div class="col-sm-8">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="Creator" name="is_creative" value="creator">
                                    <label class="custom-control-label" for="Creator">Creator/Creative</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="Influncer" name="is_creative" value="influncer">
                                    <label class="custom-control-label" for="Influncer">Influncer</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="Seller" name="is_creative" value="seller">
                                    <label class="custom-control-label" for="Seller">Seller/Merchant/Vendor</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="None" name="is_creative" value="none">
                                    <label class="custom-control-label" for="None">None of the above</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="All" name="is_creative" value="all">
                                    <label class="custom-control-label" for="All">All of the above</label>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="ebook-form-submit-btn">Submit</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(function(){
            $(document).on('click', '#ebook-form-submit-btn', function(){
                $('div.alert').remove();
                $.ajax({
                    type: 'POST',
                    url: '{{ url()->current() }}',
                    data: $('#ebook-form').serialize(),
                    success: function (response) {
                        if(response.hasOwnProperty('has_success') && response.has_success == true){
                            var successMessage = '<div class="alert alert-success icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line-circled"></i></button><p>An email has been sent to your inbox.</p></div>';
                             $('#ebook-form').prepend(successMessage);
                         $('#ebook-form').trigger("reset");
                        }
                    },
                    error: function (response) {
                        switch(response.status){
                            case 400:
var errorMessage = '<div class="alert alert-danger icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line-circled"></i></button><p>An unknown error has been occured during this operation.</p></div>';
                             $('#ebook-form').prepend(errorMessage);
                                break;
                        }
                    }
                });
            });

            $('#ebook-form').on('hidden.bs.modal', function (e) {
  $(this)
    .find("input,textarea,select")
       .val('')
       .end()
    .find("input[type=checkbox], input[type=radio]")
       .prop("checked", "")
       .end();
})
        });
    </script>
@endpush
