<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<body>
    <div class="preloader">
        <div class="signal"></div>
    </div>
    <div id="wrapper" class="wrapper clearfix">
        {{-- @include('emails.components.header') --}}
        <h3 class="center">@lang('You are here!')</h3>
        <h6 class="little">@lang('Thank you registering with JustSayUncle!')</h6>
        {{-- {{-- <p>@lang('You’ve made the first right choice, out of a whole lot more you will be making by sticking with us on this rewarding experience.')</p> --}}
        <p>@lang('If you would like to know more already visit ') <a href="https://localhost:8000">@lang('our website')</a> @lang('for further updates')</p>
        <p>@lang('I will be saying hello again soon. Until then, goodbye!')</p>
        <p>@lang('Best,')</p>
        <p>@lang('JustSayUncle')</p>
        {{-- @include('emails.components.footer') --}}
    </div>
</body>
</html>