<header class="scrollLink" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('sayuncle.index')}}"><img alt="" src="{{ asset('sayUncle/images/logo-text.png') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent" >
                <ul class="navbar-nav mr-auto  @yield('hide-header-content')" >
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link scrollLink" href="#home"><i class="fa fa-home" aria-hidden="true" style="color:#6F3C96"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollLink" href="#whatissayuncle"><i class="fa fa-question" aria-hidden="true" style="color:#6F3C96"></i> What is SayUncle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollLink" href="#register"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#6F3C96"></i> Register </a>
                    </li>
					 <li class="nav-item">
                        <a class="nav-link scrollLink" href="#contactus"><i class="fa fa-phone" aria-hidden="true" style="color:#6F3C96"></i> Contact</a>
                    </li>

                </ul>
              <!-- <button class="btn btn-primary rounded-btn  @yield('hide-header-content') " data-toggle="modal" data-target="#checkStatus"><i class="fa fa-check" aria-hidden="true"></i> Check Status</button>-->
            </div>
        </div>
    </nav>
</header>