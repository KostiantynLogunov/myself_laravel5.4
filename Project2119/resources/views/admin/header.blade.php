<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
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
                        <img src="{{ asset('assets/img/Koss_logo_2 kopie.png') }}" alt="logo" height="30">
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
                        {{--@if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else--}}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    You're GOD , {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        {{--@endif--}}
                    </ul>
                </div>
            </div>
        </nav>

        {{--@yield('content')--}}
    </div>
    <script src="{{ asset('js/app.js') }}"></script>


    <div class="container text-center portfolio_title">

        <div class="section-title">
            <h2>{{$title}}</h2>
        </div>
    </div>

    <div class="container text-center pb-1">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-primary mr-2" href="{{route('pages')}}" role="button">Pages</a>
            <a class="btn btn-primary mr-2" href="{{route('portfolio')}}" role="button">Portfolio</a>
            <a class="btn btn-primary mr-2" href="{{route('users')}}" role="button">Users</a>
            <a class="btn btn-primary" href="{{route('feedback')}}" role="button">Feedback</a>
        </div>
    </div>
</body>
</html>

{{--/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 10.07.2017
 * Time: 22:50
 */--}}
