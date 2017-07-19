<?php echo Form::open(['url'=>route('OpenSms',array('user'=>$users['id'])),'class'=>'container pt-2','method'=>'POST','enctype'=>'multipart/form-data']); ?>


<div class="form-group">
    <?php echo Form::label('text','Send message to '.$users['name'],['class'=>'col-xs-2 control-label']); ?>

    <div class="col-xs-8">
        <?php echo Form::textarea('text',old('text'),['id'=>'editor','class'=>'form-control','placeholder'=>'Enter messages for '.$users['name']]); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-xs-10 offset-xs-2">
        <?php echo Form::button('SEND',['class'=>'btn btn-primary','type'=>'submit']); ?>

    </div>
</div>

<?php echo Form::close(); ?>

<div class="container pt-3">
    <?php if($messages): ?>
       
        <ul class="list-group">
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($message['from_user_id']==$to_id && $message['to_user_id']==$from_id): ?>
                    <li class="list-group-item list-group-item-info mb-1 h-75">
                        <h5 style="color: darkblue"><?php echo e($users['name']); ?>:</h5>
                        <?php echo e($message['text']); ?>

                    </li>
                <?php elseif($message['from_user_id']==$from_id && $message['to_user_id']==$to_id): ?>
                    <li class="list-group-item list-group-item-danger ml-5 mb-1" >
                        <h5 style="color: darkred">ADMIN :</h5>
                        <?php echo e($message['text']); ?>

                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

    <?php endif; ?>


</div>



