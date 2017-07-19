<div class="wrapper container pt-2" style="color: #fff;">
    {!! Form::open(['url' => route('userEdit',array('user'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Enter name of user']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('email', 'email',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('email', $data['email'], ['class' => 'form-control','placeholder'=>'Enter email of user']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('old_images', 'Image:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-offset-2 col-xs-10">
            {!! Html::image('assets/img/users/'.$data['images'],'',['class'=>' img-responsive','width'=>'150px']) !!}
            {!! Form::hidden('old_images', $data['images']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('images', 'Image:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Choose image','data-buttonName'=>"btn-primary",'data-placeholder'=>"No file"]) !!}
        </div>
    </div>



    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}

    <script>
        CKEDITOR.replace( 'editor' );
    </script>
</div>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"></script>
{{--/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 12.07.2017
 * Time: 20:38
 */--}}
