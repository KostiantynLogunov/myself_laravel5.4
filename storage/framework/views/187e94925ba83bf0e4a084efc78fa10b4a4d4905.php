<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Freelance Web Developer</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link rel="icon" href="<?php echo e(asset('assets/img/favicon1.png')); ?>">

</head>
<body>

<div class="back-shapes">
    <em class="active epic-icon fa fa-angellist floating" style="top:7.411504424778761%;left:2.34375%;animation-delay:-5s;"></em>
    <em class="active epic-icon fa fa-android floating" style="top:91.3716814159292%;left:94.53125%;animation-delay:-4.5s;"></em>
    <em class="active epic-icon fa fa-apple floating" style="top:6.8584070796460175%;left:91.171875%;animation-delay:-1.35s;"></em>
    <em class="active epic-icon fa fa-btc floating" style="top:46.68141592920354%;left:45.46875%;animation-delay:-2.1s;"></em>
    <em class="active epic-icon fa fa-bank floating" style="top:26.991150442477878%;left:21.875%;animation-delay:-3.4s;"></em>
    <em class="active epic-icon fa fa-at floating" style="top:51.769911504424776%;left:7.421875%;animation-delay:-0.95s;"></em>
    <em class="active epic-icon fa fa-bug floating" style="top:15.044247787610619%;left:76.40625%;animation-delay:-3.65s;"></em>
    <em class="active epic-icon fa fa-camera floating" style="top:50.110619469026545%;left:83.828125%;animation-delay:-2.8s;"></em>
    <em class="active epic-icon fa fa-child floating" style="top:37.7212389380531%;left:63.984375%;animation-delay:-3.75s;"></em>
    <em class="active epic-icon fa fa-cubes floating" style="top:62.389380530973455%;left:70.546875%;animation-delay:-3.1s;"></em>
    <em class="active epic-icon fa fa-cog floating" style="top:28.650442477876105%;left:12.8125%;animation-delay:-4.25s;"></em>
    <em class="active epic-icon fa fa-cloud floating" style="top:10.619469026548673%;left:28.984375%;animation-delay:-4.15s;"></em>
    <em class="active epic-icon fa fa-connectdevelop floating" style="top:8.29646017699115%;left:54.375%;animation-delay:-1.85s;"></em>
    <em class="active epic-icon fa fa-comment floating" style="top:91.70353982300885%;left:63.828125%;animation-delay:-1.75s;"></em>
    <em class="active epic-icon fa fa-comment-o floating" style="top:41.150442477876105%;left:0.078125%;animation-delay:-2.65s;"></em>
    <em class="active epic-icon fa fa-dollar floating" style="top:34.18141592920354%;left:92.890625%;animation-delay:-2.5s;"></em>
    <em class="active epic-icon fa fa-dollar floating" style="top:33.73893805309734%;left:46.5625%;animation-delay:-1.1s;"></em>
    <em class="active epic-icon fa fa-diamond floating" style="top:2.9867256637168142%;left:66.015625%;animation-delay:-2.9s;"></em>
    <em class="active epic-icon fa fa-drupal floating" style="top:58.4070796460177%;left:18.4375%;animation-delay:-0.25s;"></em>
    <em class="active epic-icon fa fa-euro floating" style="top:36.39380530973451%;left:31.875%;animation-delay:-2.6s;"></em>
    <em class="active epic-icon fa fa-euro floating" style="top:35.176991150442475%;left:55.15625%;animation-delay:-0.2s;"></em>
    <em class="active epic-icon fa fa-female floating" style="top:2.3230088495575223%;left:16.09375%;animation-delay:-1.85s;"></em>
    <em class="active epic-icon fa fa-fighter-jet floating" style="top:67.47787610619469%;left:61.71875%;animation-delay:-2.25s;"></em>
    <em class="active epic-icon fa fa-git-square floating" style="top:79.97787610619469%;left:80.703125%;animation-delay:-1.25s;"></em>
    <em class="active epic-icon fa fa-html5 floating" style="top:6.5265486725663715%;left:82.1875%;animation-delay:-4.8s;"></em>
    <em class="active epic-icon fa fa-linkedin floating" style="top:28.207964601769913%;left:82.8125%;animation-delay:-1.45s;"></em>
    <em class="active epic-icon fa fa-linux floating" style="top:6.6371681415929205%;left:39.53125%;animation-delay:-4.6s;"></em>
    <em class="active epic-icon fa fa-male floating" style="top:59.51327433628319%;left:32.421875%;animation-delay:-3.4s;"></em>
    <em class="active epic-icon fa fa-map-marker floating" style="top:64.15929203539822%;left:0.78125%;animation-delay:-3.35s;"></em>
    <em class="active epic-icon fa fa-music floating" style="top:70.46460176991151%;left:46.015625%;animation-delay:-4.05s;"></em>
    <em class="active epic-icon fa fa-money floating" style="top:72.23451327433628%;left:24.765625%;animation-delay:-2.55s;"></em>
    <em class="active epic-icon fa fa-money floating" style="top:1.1061946902654867%;left:45.703125%;animation-delay:-3.35s;"></em>
    <em class="active epic-icon fa fa-money floating" style="top:64.15929203539822%;left:93.828125%;animation-delay:-4.1s;"></em>
    <em class="active epic-icon fa fa-paper-plane-o floating" style="top:77.98672566371681%;left:7.109375%;animation-delay:-4.75s;"></em>
    <em class="active epic-icon fa fa-twitter floating" style="top:75%;left:87.5%;animation-delay:-2.15s;"></em>
    <em class="active epic-icon fa fa-user-secret floating" style="top:1.991150442477876%;left:8.28125%;animation-delay:-4.45s;"></em>
    <em class="active epic-icon fa fa-users floating" style="top:22.67699115044248%;left:71.25%;animation-delay:-1.15s;"></em>
    <em class="active epic-icon fa fa-wheelchair floating" style="top:85.06637168141593%;left:72.34375%;animation-delay:-1.2s;"></em>
    <em class="active epic-icon fa fa-wordpress floating" style="top:24.22566371681416%;left:59.296875%;animation-delay:-1.7s;"></em>
    <em class="active epic-icon fa fa-vk floating" style="top:41.924778761061944%;left:75.625%;animation-delay:-4.35s;"></em>
    <em class="active epic-icon fa fa-facebook-f floating" style="top:1.6592920353982301%;left:95.859375%;animation-delay:-1.9s;"></em>
    <em class="active epic-icon fa fa-wifi floating" style="top:87.61061946902655%;left:34.375%;animation-delay:-2.75s;"></em>
    <em class="active epic-icon fa fa-windows floating" style="top:87.61061946902655%;left:52.1875%;animation-delay:-3.55s;"></em>
    <em class="active epic-icon fa fa-warning floating" style="top:87.38938053097345%;left:15.703125%;animation-delay:-2.35s;"></em>
    <em class="active epic-icon fa fa-space-shuttle floating" style="top:53.31858407079646%;left:54.296875%;animation-delay:-4.05s;"></em>
    <em class="active epic-icon fa fa-star floating" style="top:29.20353982300885%;left:37.578125%;animation-delay:-0.45s;"></em>
    <em class="active epic-icon fa fa-star floating" style="top:45.02212389380531%;left:24.140625%;animation-delay:-1.05s;"></em>
    <em class="active epic-icon fa fa-star floating" style="top:88.49557522123894%;left:-0.3125%;animation-delay:-0.2s;"></em>
    <em class="active epic-icon fa fa-star floating" style="top:-1.3274336283185841%;left:75%;animation-delay:-4.7s;"></em>
    <em class="active epic-icon fa fa-thumbs-o-up floating" style="top:-0.4424778761061947%;left:22.03125%;animation-delay:-5s;"></em>
    <em class="active epic-icon fa fa-ruble floating" style="top:-0.6637168141592921%;left:0.859375%;animation-delay:-1.05s;"></em>
    <em class="active epic-icon fa fa-ruble floating" style="top:73.45132743362832%;left:56.015625%;animation-delay:-0.45s;"></em>
    <em class="active epic-icon fa fa-automobile floating" style="top:96.1283185840708%;left:88.046875%;animation-delay:-4.15s;"></em>
    <em class="active epic-icon fa fa-cc-paypal floating" style="top:-0.8849557522123894%;left:60.234375%;animation-delay:-3.2s;"></em>
    <em class="active epic-icon fa fa-cc-visa floating" style="top:63.163716814159294%;left:77.265625%;animation-delay:-1.7s;"></em>


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
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e(asset('assets/img/Koss_logo_2 kopie.png')); ?>" alt="logo" height="30">
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Welcome, <?php echo e(Auth::user()->name); ?>

                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

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


    <div class="container text-center portfolio_title mt-5">
        <div class="section-title">
            <h2 style="color: white"><?php echo e($title); ?></h2>
        </div>
        <div class="row align-items-center">
            <div class="col-2">
                <img class="img-responsive" style="width: 150px;" src="<?php echo e('assets/img/users/'.Auth::user()->images); ?>" alt="user's foto">
            </div>
            <div class="col text-left " style="color: whitesmoke;">
                <ul>
                    <li>Your name: <?php echo e(Auth::user()->name); ?></li>
                    <li>Your Email: <?php echo e(Auth::user()->email); ?></li>
                    <li>Your registration date: <?php echo e(Auth::user()->created_at); ?></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-primary mr-2" href="user/settings" role="button">Your Settings</a>
        </div>
    </div>


    <?php echo Form::open(['url'=>route('sendSms'),'class'=>'container pt-2','method'=>'POST','enctype'=>'multipart/form-data']); ?>


        <div class="form-group">
            <?php echo Form::label('text','Send message to Admin',['class'=>'col-xs-2 control-label']); ?>

            <div class="col-xs-8">
                <?php echo Form::textarea('text',old('text'),['id'=>'editor','class'=>'form-control','placeholder'=>'Enter messages for admin']); ?>

            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-10 offset-xs-2">
                <?php echo Form::button('SEND',['class'=>'btn btn-primary','type'=>'submit']); ?>

            </div>
        </div>

    <?php echo Form::close(); ?>


    <div class="container pt-3">
        <?php if(($messages->where('from_user_id',$from_id)->first()) || !empty($messages->where('to_user_id',$from_id)->first()) ): ?>
            <div class="text-center">
                <h3 style="color: white">Your conversation with ADMIN:</h3>
            </div>
            <ul class="list-group">
                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($message['from_user_id']==$from_id): ?>
                        <li class="list-group-item list-group-item-info mb-1 h-75">
                            <h5 style="color: darkblue"><?php echo e(Auth::user()->name); ?> :</h5>
                            <?php echo e($message['text']); ?>

                        </li>
                    <?php elseif($message['to_user_id']==$from_id): ?>
                        <li class="list-group-item list-group-item-danger ml-5 mb-1" >
                            <h5 style="color: darkred">ADMIN :</h5>
                            <?php echo e($message['text']); ?>

                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

        <?php endif; ?>


    </div>



</div>


<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>


