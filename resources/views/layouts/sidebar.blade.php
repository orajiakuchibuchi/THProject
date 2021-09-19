<aside class="sidebar">
    <div class="inner">
        <nav>
            <ul class="parent-ul">
                <li class="{{ request()->route()->getName() == 'console.index' ? ' active' : null }}">
                    <a href="{{ route('console.index') }}">
                        <span class="ico"><i class="ti-menu"></i></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="{{ request()->route()->getName() == 'console.about_us' ? ' active' : null }}">
                    <a href="{{ route('console.about_us', ['all']) }}">
                        <span class="ico"><i class="ti-menu"></i></span>
                        <span class="text">About Us</span>
                    </a>
                </li>
                <li class="{{ request()->route()->getName() == 'console.joinTheWave' ? ' active' : null }}">
                    <a href="{{ route('console.joinTheWave') }}">
                        <span class="ico"><i class="ti-menu"></i></span>
                        <span class="text">Join The Wave</span>
                    </a>
                </li>
                <li class="{{ request()->route()->getName() == 'console.events' ? ' active' : null }}">
                    <a href="{{ route('console.events') }}">
                        <span class="ico"><i class="ti-menu"></i></span>
                        <span class="text">Events</span>
                    </a>
                </li>

                <li class="{{ request()->route()->getName() == 'console.sayuncle' ? ' active' : null }}">
                    <a href="{{ route('console.sayuncle.contestants') }}">
                        <span class="ico"><i class="ti-menu"></i></span>
                        <span class="text"> Sayuncle Contestants</span>
                    </a>
                </li>
                <li class="{{ request()->route()->getName() == 'console.editPassword' ? ' active' : null }}">
                    <a href="{{ route('console.editPassword') }}">
                        <span class="ico"><i class="ti-pencil"></i></span>
                        <span class="text"> Update Password</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="ico"><i class="ti-power-off"></i></span>
                        <span class="text">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
