<div class="wrapper container" style="color: #fff;">
    <?php echo Form::open(['url' => route('pagesEdit',array('page'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']); ?>

    <div class="form-group">
        <?php echo Form::hidden('id', $data['id']); ?>

        <?php echo Form::label('name', 'Название:',['class'=>'col-xs-2 control-label']); ?>

        <div class="col-xs-8">
            <?php echo Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Введите название страницы']); ?>

        </div>
    </div>

    <div class="form-group">
        <?php echo Form::label('alias', 'Псевдоним:',['class'=>'col-xs-2 control-label']); ?>

        <div class="col-xs-8">
            <?php echo Form::text('alias', $data['alias'], ['class' => 'form-control','placeholder'=>'Введите псевдоним страницы']); ?>

        </div>
    </div>

    <div class="form-group">
        <?php echo Form::label('text', 'Текст:',['class'=>'col-xs-2 control-label']); ?>

        <div class="col-xs-8">
            <?php echo Form::textarea('text', $data['text'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']); ?>

        </div>
    </div>

    <div class="form-group">
        <?php echo Form::label('old_images', 'Изображение:',['class'=>'col-xs-2 control-label']); ?>

        <div class="col-xs-offset-2 col-xs-10">
            <?php echo Html::image('assets/img/'.$data['images'],'',['class'=>'img-circle img-responsive','width'=>'150px']); ?>

            <?php echo Form::hidden('old_images', $data['images']); ?>

        </div>
    </div>

    <div class="form-group">
        <?php echo Form::label('images', 'Изображение:',['class'=>'col-xs-2 control-label']); ?>

        <div class="col-xs-8">
            <?php echo Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]); ?>

        </div>
    </div>



    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <?php echo Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']); ?>

        </div>
    </div>

    <?php echo Form::close(); ?>


    <script>
        CKEDITOR.replace( 'editor' );
    </script>
</div>


