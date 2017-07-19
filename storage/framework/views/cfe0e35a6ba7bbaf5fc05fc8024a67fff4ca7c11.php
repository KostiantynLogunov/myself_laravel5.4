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
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="icon" href="<?php echo e(asset('assets/img/favicon1.png')); ?>">

    <script type="text/javascript" src="<?php echo e(asset('assets/js/ckeditor/ckeditor.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap-filestyle.min.js')); ?>"></script>
</head>
<body>

<header id="header_wrapper">
    <?php echo $__env->yieldContent('header'); ?>

    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger" role="alert">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
</header>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>


