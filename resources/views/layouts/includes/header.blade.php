<nav class="navbar navbar-fixed-top navbar-expand-md navbar-light">
    <a class="navbar-brand primary" href="{{ url('/') }}">
        <img src="{{asset('logo/primary_marker.png')}}" height="40" alt="BN Here logo">
        <strong class="mr-2">Local</strong><span class="small_slogan">Track &amp; Trace</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('allproperties')}}">All Properties</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-center" href="{{ route('venues.show') }}">Pubs &amp; Venues</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-center" href="{{ route('events.show') }}">Events</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Register
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (Route::has('register'))
                            <a class="nav-link hvr-underline-from-center" href="{{ route('register') }}">{{ __('User Register') }}</a>
                        @endif
                        <a class="nav-link hvr-underline-from-center" href="{{ route('register.landlord') }}">{{ __('Landlord Register') }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-center" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @else
                @if(Auth::user()->user_type=='company')
                <li>
                    <a href="{{route('property.create')}}">
                        <button class="btn btn-secondary">Add property</button>
                    </a>
                </li>
                @endif
                    @if(Auth::user()->user_type=='admin')
                        <li class="nav-item">
                            <a class="nav-link hvr-underline-from-center" href="/admin">Administration</a>
                        </li>
                    @endif
                    @if(Auth::user()->user_type=='landlord' && !Auth::user()->subscribed('main'))
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="/subscribe">Edit my venue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="/subscribe">Add Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="/subscribe">Tagin Stats</a>
                    </li>

                    @elseif(Auth::user()->subscribed('main'))
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="/venue/{{ Auth::user()->venue_id }}/edit">Edit my venue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="{{route('event.create')}}">Add Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="{{route('venue.venuetaginstats', [Auth::user()->venue_id, date('Y-m-d')])}}">Tagin Stats</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="{{ route('venues.show') }}">Pubs &amp; Venues</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="{{ route('events.show') }}">Events</a>
                    </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown hvr-underline-from-center" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                        @if(Auth::user()->user_type=='company')
                            {{ Auth::user()->name }}
                        @else
                            {{ Auth::user()->name }}
                        @endif<span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @if(Auth::user()->user_type=='company')
                            <a href="{{route('company.view')}}" class="dropdown-item ">{{__('Company')}}</a>
                            <a href="{{route('property.myproperty')}}" class="dropdown-item">{{__('My Properties')}}</a>
                            <a href="{{route('applicants')}}" class="dropdown-item">{{__('Applicants')}}</a>
                        @else
                            @if(!Auth::user()->user_type=='landlord')
                            <a href="{{route('user.view')}}" class="dropdown-item hvr-underline-from-center">{{__('Profile')}}</a>
                            @endif
                        @endif
                        <a class="dropdown-item hvr-underline-from-center" href="{{route('view.venue')}}">
                            View Venue
                        </a>
                        <a class="dropdown-item hvr-underline-from-center" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
