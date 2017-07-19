<div class="container pt-3">
    <?php if($pages): ?>
        <table class="table table-inverse   table-sm ">
            <thead>
            <tr>
                <th>№</th>
                <th>Name</th>
                <th>Alias</th>
                <th>Text</th>
                <th>Date created</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($page->id); ?></td>
                            <td><?php echo Html::link(route('pagesEdit',['page'=>$page->id]),$page->name,['alt'=>$page->name]); ?></td>
                            <td><?php echo e($page->alias); ?></td>
                            <td><?php echo e($page->text); ?></td>
                            <td><?php echo e($page->created_at); ?></td>
                            <td><?php echo Form::open(['url'=>route('pagesEdit',['page'=>$page->id]),'class'=>'form-horizontal','method'=>'POST']); ?>

                                <?php echo Form::hidden('_method','delete'); ?>

                                <?php echo Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']); ?>

                            <?php echo Form::close(); ?></td>
                        </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>

        <?php echo Html::link(route('pagesAdd'),'Add New page'   ); ?>

</div>


