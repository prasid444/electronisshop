<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container" >
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                  <div class="icon-bar">


                  <img src="images/icons/phonerepair.png" height="30px" />
                  <strong>HOME</strong>
                    </div>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())


                        <li><a href="/home"><img src="images/icons/cart_icon.png" height="20px" /><span class="badge">0</span></a></li>
                        <li><a href="/products">Products</a></li>
                        <li><a href="/contacts">Contacts</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>

                    @else
                      <li><a href="/home"><img src="images/icons/cart_icon.png" height="20px" /><span class="badge">{{Auth::user()->cart}}</span></a></li>
                      <li><a href="/produts">Products</a></li>
                        <li><a href="/contacts">Contacts</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu list-group" role="menu">
                              {{-- <li class="list-group-item"> --}}
                                <a href="#" class="list-group-item">
                                  <img src="images/icons/profile_icon.png" height="20px" />
                                  My Profile
                                </a>

                              {{-- </li> --}}
                                {{-- <li class="list-group-item" > --}}



                                    <a class="list-group-item" href="{{ route('user.logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                {{-- </li> --}}
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


</div>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
