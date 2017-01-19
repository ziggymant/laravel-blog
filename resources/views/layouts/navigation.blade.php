{{-- <nav id="shop-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Home</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="nav-links" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul  class="nav navbar-nav">
                <li>
                    <a href="#">Placehold</a>
                </li>
                <li>
                    <a href="#">Placehold</a>
                </li>

              </ul>

              <ul class="nav navbar-nav navbar-right">

                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            @if (Auth::user()->isAdmin())
                              <li>
                                  <a href="{{url('/admin/index')}}">Admin page</a>
                              </li>
                            @endif
                            @if (Auth::user())
                              <li>
                                  <a href="{{url('profile', Auth::id())}}">User profile</a>
                              </li>
                            @endif
                        </ul>
                    </li>
                @endif
              </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
 --}}

    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="nav-links" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul  class="nav navbar-nav">
                <li>
                    <a href="#">Placehold</a>
                </li>
                <li>
                    <a href="#">Placehold</a>
                </li>

              </ul>

              <ul class="nav navbar-nav navbar-right">

                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            @if (Auth::user()->isAdmin())
                              <li>
                                  <a href="{{url('/admin/index')}}">Admin page</a>
                              </li>
                            @endif
                            @if (Auth::user())
                              <li>
                                  <a href="{{url('profile', Auth::id())}}">User profile</a>
                              </li>
                            @endif
                        </ul>
                    </li>
                @endif
              </ul>

        </div>
        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>