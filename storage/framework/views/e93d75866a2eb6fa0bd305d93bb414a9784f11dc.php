<div class="container pt-3">
    <?php if($portfolios): ?>
        <table class="table table-inverse   table-sm ">
            <thead>
            <tr>
                <th>№</th>
                <th>Name</th>
                <th>Images</th>
                <th>Filter</th>
                <th>Date created</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($portfolio->id); ?></td>
                    <td><?php echo Html::link(route('portfolioEdit',['page'=>$portfolio->id]),$portfolio->name,['alt'=>$portfolio->name]); ?></td>
                    <td><?php echo e($portfolio->images); ?></td>
                    <td><?php echo e($portfolio->filter); ?></td>
                    <td><?php echo e($portfolio->created_at); ?></td>
                    <td><?php echo Form::open(['url'=>route('portfolioEdit',['page'=>$portfolio->id]),'class'=>'form-horizontal','method'=>'POST']); ?>

                        <?php echo Form::hidden('_method','delete'); ?>

                        <?php echo Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']); ?>

                        <?php echo Form::close(); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>

    <?php echo Html::link(route('portfolioAdd'),'Add New portfolio'   ); ?>

</div>

