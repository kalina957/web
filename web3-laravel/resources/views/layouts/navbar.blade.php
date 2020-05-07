<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #212121">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @if(Auth::guard('admin')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color: white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}" style="color: white">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}" style="color: white">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pdf" style="color: white">Art</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{action('ExportExcelController@index')}}" style="color: white">Users</a>
                    </li>
                @else
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color: white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}" style="color: white">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}" style="color: white">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{action('ItemController@index')}}" style="color: white">Art</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color: white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}" style="color: white">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}" style="color: white">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{action('ItemController@index')}}" style="color: white">Art</a>
                    </li>
                @endguest
                    @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if(Auth::guard('admin')->check())
                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" style="color: white" aria-expanded="false" v-pre>
                             Admin
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: #212121">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: white">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
        </div>
        </li>
                    @else

                @guest
                    <li class="nav-item">
                        <a class="nav-link" style="color: white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"  style="color: white">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown" >
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret" ></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: #212121">
                            <a class="fa fa-btn fa-user dropdown-item"  href="{{url('/profile')}}" style="color: white">
                                My Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"  style="color: white">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                @endif
            </ul>
        </div>
    </div>
</nav>
