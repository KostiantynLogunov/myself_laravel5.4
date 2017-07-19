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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="icon" href="{{ asset('assets/img/favicon1.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
{{--header section--}}
@yield('header')
{{--header section--}}

{{--Content section--}}
@yield('content')
{{--Content section--}}



<!-- <footer class="fixed-bottom text-center">
    By Kostiantyn
</footer>  -->

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>
</body>
</html>

{{--
/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 10.07.2017
 * Time: 11:20
 */--}}
