<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello, {{$to_name}}</h1>

    <p>On site <b>www.myself</b> , You have new message from user - <b>{{$from_name}}</b> with email - {{$from_mail}}.</p>
    <p>Text of message:</p>
    <p>{{$text}}</p>
</body>
</html>

{{--
/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 17.07.2017
 * Time: 15:33
 */--}}
