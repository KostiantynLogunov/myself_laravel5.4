<div class="wrapper container pt-2" style="color: #fff;">

    <?php echo Form::open(['url'=>route('portfolioAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']); ?>


    <div class="form-group">
        <?php echo Form::label('name','Name',['class'=>'col-xs-2 control-label']); ?>

        <div class="col-xs-8">
            <?php echo Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter name for portfolio']); ?>

        </div>
    </div>

    <div class="form-group">
        <?php echo Form::label('filter','Filter',['class'=>'col-xs-2 control-label']); ?>

        <div class="col-xs-8">
            <?php echo Form::text('filter',old('filter'),['class'=>'form-control','placeholder'=>'Enter filter for portfolio']); ?>

        </div>
    </div>

    <div class="form-group">
        <?php echo Form::label('text','About',['class'=>'col-xs-2 control-label']); ?>

        <div class="col-xs-8">
            <?php echo Form::textarea('text',old('text'),['class'=>'form-control','placeholder'=>'Enter text about the portfolio']); ?>

        </div>
    </div>

    <div class="form-group">
        <?php echo Form::label('images','Image',['class'=>'col-xs-2 control-label']); ?>

        <div class="col-xs-8">
            <?php echo Form::file('images',['class'=>'filestyle','data-buttonText'=>'Choose image...','data-buttonName'=>"btn-primary",'data-placeholder'=>"File is absent"]); ?>

        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-10 offset-xs-2">
            <?php echo Form::button('Save',['class'=>'btn btn-primary','type'=>'submit']); ?>

        </div>
    </div>

    <?php echo Form::close(); ?>


    <script>
        CKEDITOR.replace('editor');
    </script>

    <script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap-filestyle.min.js')); ?>"></script>

</div>

