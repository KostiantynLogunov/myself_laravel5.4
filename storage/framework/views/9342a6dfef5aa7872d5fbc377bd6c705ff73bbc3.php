<?php if(isset($menu)): ?>
    <nav class="navbar navbar-toggleable navbar-light bg-faded fixed-top">
        <a class="navbar-brand nav-link" data-toggle="tab" href="#Home"><img src="<?php echo e(asset('assets/img/Koss_logo_2 kopie.png')); ?>" alt="logo" height="30"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#startupNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="startupNavbar">

            <ul class="navbar-nav">

                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(($item['title'] == "Home") ? 'active' :''); ?>" data-toggle="tab" href="#<?php echo e($item['alias']); ?>"><?php echo e($item['title']); ?> <span class="sr-only">(current)</span></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                

               
                <li class="nav-item">
                    
                    <?php if(Auth::guest()): ?>
                        
                        <a class="btn btn-primary" href="/admin">Sign in</a>
                    <?php else: ?>
                        <a class="btn btn-primary mr-1" href="/admin">In Cabinet</a>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-secondary" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu " role="menu">
                                <li>
                                    <a href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <div class="pl-3">Logout</div>
                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>
<?php endif; ?>


