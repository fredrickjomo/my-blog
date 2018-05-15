<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monitor 254</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/mycss/layout.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark home-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">MONITOR 254</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown active">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="caret"></span><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>&nbsp;Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{route('category.showCelebrities')}}">Celebrities</a><br>
                        <a href="{{route('category.showPolitics')}}">Politics</a><br>
                        <a href="{{route('category.showSports')}}">Sports</a><br>
                        <a href="{{route('category.showTrends')}}">Trends</a><br>
                        <a href="{{route('category.showCampusVibe')}}">Campus Vibe</a><br>
                        <a href="{{route('category.showRelationships')}}">Relationships</a><br>
                        <a href="{{route('category.showHealth')}}">Health</a><br>
                        <a href="{{route('category.showBettingTips')}}">Betting tips</a><br>
                        <a href="{{route('category.showMovies')}}">Movies</a><br>
                        <a href="{{route('category.showUnclassified')}}">Unclassified</a><br>
                    </div></li>
                <li><a class="nav-link active" href="{{route('category.showTrends')}}"><span class="-black-tie">t</span>&nbsp;Trends</a></li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('about-us.index')}}"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="contact-us"><i class="fa fa-phone"></i>&nbsp;Contact Us</a>
                </li>
                <style>
                    .dropdown > #profile-pic{
                        height: 30px;
                        width: 30px;
                    }
                    </style>
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link active" href="{{ route('login') }}"><i class="fa fa-sign-in"></i> {{ __('Login') }}</a></li>
                    <li><a class="nav-link active" href="{{ route('register') }}"><i class="fa fa-user-plus"></i> {{ __('Register') }}</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
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
    </div>
</nav>
@yield('content')


<!-- Footer -->
<footer class="py-5">
    <div class="container footer">
        <p class="m-0 text-center text-white">Copyright &copy; Monitor 254 - 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('js/jquery-3.2.1.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>

</html>
