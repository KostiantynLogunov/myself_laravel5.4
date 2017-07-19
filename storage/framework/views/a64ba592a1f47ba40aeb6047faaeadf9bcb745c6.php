<div class="container pt-3" style="color: whitesmoke">
    <?php if($users): ?>
        <table class="table   table-sm table-responsive justify-content-center">
            <thead >
            <tr>
                <th>№</th>
                <th>Name</th>


                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($user->name  != 'admin'): ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo Html::link(route('OpenSms',['user'=>$user->id]),$user->name,['alt'=>$user->name]); ?></td>

                    <td><?php echo Form::open(['url'=>route('OpenSms',['user'=>$user->id]),'class'=>'form-horizontal','method'=>'POST']); ?>

                        <?php echo Form::hidden('_method','delete'); ?>

                        <?php echo Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']); ?>

                        <?php echo Form::close(); ?></td>
                </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

