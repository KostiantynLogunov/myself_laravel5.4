<div class="container" style="color: whitesmoke">
    <div class="row justify-content-center p-3">
        <h3><?php echo e($name_prj); ?></h3>
    </div>
    <div class="row pb-3 pt-3">
        <img class="img-responsive" src="<?php echo e(asset('assets/img/portfolio/'.$img_prj)); ?>" alt="<?php echo e($name_prj); ?>">
    </div>
    <div class="row">
        <p>
            <?php echo $text_prj; ?>

        </p>
    </div>
</div>

