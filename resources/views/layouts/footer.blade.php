@if(strpos(request()->route()->getName(), 'console.') === false )
    <footer class="bg_gradient sectionPT footer_st2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer_left">
                        <img class="logo" width="170" src="{{ asset('img/logo.png') }}">

                        <ul>
                            <li>
                                <a  href="{{ url('/events') }}">Contest & Events</a>
                            </li>
                            <li>
                                <!--<a data-toggle="modal" data-target="#legalStuffModal" href="#">The Legal Stuff</a>-->
                                
                                <a data-toggle="modal" data-target="#modalPush" href="#">The Legal Stuff</a>
                            </li>
                            <li>
                                <a href="{{ url('/creative') }}">For Creatives</a>
                            </li>
                            <li>
                                <a href="{{ url('/seller') }}">For Vendors / Sellers</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-11 col_center">
                        <h4 class="heading color_white mb-4">Check out these free eBooks</h4>
                        <a href="{{ url('/creative/ebook') }}" class="footer_box">
                            <div class="img_area">
                                <img height="90" src="{{ asset('img/cover.png') }}">
                            </div>
                            <p>Now is the best time to be an influencer</p>
                        </a>
                        <a href="{{ url('/seller/ebook') }}" class="footer_box">
                            <div class="img_area">
                                <img height="90" src="{{ asset('img/cover2.png') }}">
                            </div>
                            <p>Make 10x profit in your today's business</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endif