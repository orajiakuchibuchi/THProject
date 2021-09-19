<header>
    <div class="container">
        <div class="header__top u-flex u-flex--item-center" style="position: relative;">
            <div class="menu__triger">
                <i class="ti-menu"></i>
            </div>
            

            <div class="site-logo" style="text-align: right">
                <h4><img src="{{ asset('img/logo-color.png') }}"></h4>
                <span class="_name mt-3" style="display: block;">{{ auth()->user()->name }}</span>
            </div>
        </div>
    </div>
</header>
