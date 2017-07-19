<!DOCTYPE html>
<html lang="en">
<head>
    <!--[if lt IE 9]><script>"header footer section aside nav article figure figcaption hgroup time main".replace(/\w+/g,function(a){document.createElement(a)})</script><![endif]-->
    <!-- <script>
      var html = document.documentElement
      html.className = html.className.replace(/\bno-js\b/, "js")
      if ("ontouchstart" in html) { html.className = html.className.replace(/\bno-touch\b/, "touch") }
    </script> -->

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--відміняє маштабування сторінки - для адаптивних сайтів-->
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!--налаштування для инет експлорера-->
    <title>Freelance Web Developer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="icon" href="{{ asset('assets/img/favicon1.png') }}">

    <script type="text/javascript" src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"></script>
</head>
<body>

<header id="header_wrapper">
    @yield('header')

    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</header>
    @yield('content')
</body>
</html>

{{--
/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 10.07.2017
 * Time: 22:33
 */--}}
