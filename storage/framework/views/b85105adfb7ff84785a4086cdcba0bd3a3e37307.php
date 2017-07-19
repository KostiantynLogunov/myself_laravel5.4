<div class="container pt-3">
    <?php if($users): ?>
        <table class="table table-inverse   table-sm ">
            <thead>
            <tr>
                <th>№</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date created</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo Html::link(route('userEdit',['page'=>$user->id]),$user->name,['alt'=>$user->name]); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->created_at); ?></td>
                    <td><?php echo Form::open(['url'=>route('userEdit',['page'=>$user->id]),'class'=>'form-horizontal','method'=>'POST']); ?>

                        <?php echo Form::hidden('_method','delete'); ?>

                        <?php echo Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']); ?>

                        <?php echo Form::close(); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

