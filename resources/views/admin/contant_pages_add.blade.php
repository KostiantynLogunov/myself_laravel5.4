<div class="wrapper container pt-2" style="color: #fff;">

    {!! Form::open(['url'=>route('pagesAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
            {!! Form::label('name','Name',['class'=>'col-xs-2 control-label'])!!}
            <div class="col-xs-8">
                {!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter name for page'])!!}
           </div>
       </div>

    <div class="form-group">
        {!! Form::label('alias','Alias',['class'=>'col-xs-2 control-label'])!!}
        <div class="col-xs-8">
            {!! Form::text('alias',old('alias'),['class'=>'form-control','placeholder'=>'Enter alias for page'])!!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('text','Text',['class'=>'col-xs-2 control-label'])!!}
        <div class="col-xs-8">
            {!! Form::textarea('text',old('text'),['id'=>'editor','class'=>'form-control','placeholder'=>'Enter text for page'])!!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('images','Image',['class'=>'col-xs-2 control-label'])!!}
        <div class="col-xs-8">
            {!! Form::file('images',['class'=>'filestyle','data-buttonText'=>'Choose image...','data-buttonName'=>"btn-primary",'data-placeholder'=>"File is absent"])!!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-10 offset-xs-2">
            {!! Form::button('Save',['class'=>'btn btn-primary','type'=>'submit'])!!}
        </div>
    </div>

    {!! Form::close() !!}

    <script>
        CKEDITOR.replace('editor');
    </script>

    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"></script>

</div>

{{--
/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 11.07.2017
 * Time: 14:26
 */--}}
