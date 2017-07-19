<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

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
                                    You're GOD , <?php echo e(Auth::user()->name); ?>

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


    <div class="container text-center portfolio_title">

        <div class="section-title">
            <h2><?php echo e($title); ?></h2>
        </div>
    </div>

    <div class="container text-center pb-1">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-primary mr-2" href="<?php echo e(route('pages')); ?>" role="button">Pages</a>
            <a class="btn btn-primary mr-2" href="<?php echo e(route('portfolio')); ?>" role="button">Portfolio</a>
            <a class="btn btn-primary mr-2" href="<?php echo e(route('users')); ?>" role="button">Users</a>
            <a class="btn btn-primary" href="<?php echo e(route('feedback')); ?>" role="button">Feedback</a>
        </div>
    </div>
</body>
</html>


