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
    <h1>Hello, <?php echo e($to_name); ?></h1>

    <p>On site <b>www.myself</b> , You have new message from user - <b><?php echo e($from_name); ?></b> with email - <?php echo e($from_mail); ?>.</p>
    <p>Text of message:</p>
    <p><?php echo e($text); ?></p>
</body>
</html>


