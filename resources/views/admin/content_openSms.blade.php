{!! Form::open(['url'=>route('OpenSms',array('user'=>$users['id'])),'class'=>'container pt-2','method'=>'POST','enctype'=>'multipart/form-data']) !!}

<div class="form-group">
    {!! Form::label('text','Send message to '.$users['name'],['class'=>'col-xs-2 control-label'])!!}
    <div class="col-xs-8">
        {!! Form::textarea('text',old('text'),['id'=>'editor','class'=>'form-control','placeholder'=>'Enter messages for '.$users['name']])!!}
    </div>
</div>

<div class="form-group">
    <div class="col-xs-10 offset-xs-2">
        {!! Form::button('SEND',['class'=>'btn btn-primary','type'=>'submit'])!!}
    </div>
</div>

{!! Form::close() !!}
<div class="container pt-3">
    @if($messages)
       {{-- <div class="text-center">
            <h3 style="color: white">Your talking with ADMIN:</h3>
        </div>--}}
        <ul class="list-group">
            @foreach($messages as $message)
                @if($message['from_user_id']==$to_id && $message['to_user_id']==$from_id)
                    <li class="list-group-item list-group-item-info mb-1 h-75">
                        <h5 style="color: darkblue">{{$users['name']}}:</h5>
                        {{$message['text'] }}
                    </li>
                @elseif($message['from_user_id']==$from_id && $message['to_user_id']==$to_id)
                    <li class="list-group-item list-group-item-danger ml-5 mb-1" >
                        <h5 style="color: darkred">ADMIN :</h5>
                        {{$message['text'] }}
                    </li>
                @endif
            @endforeach
        </ul>

    @endif


</div>

{{--<div class="container pt-3">
    @if($messages)
        <div class="text-center">
            --}}{{--<h3 style="color: white">Your talking with ADMIN:</h3>--}}{{--
        </div>
        <ul class="list-group">
            @foreach($messages as $message)

                @if($message['from_user_id']==$users['id'])
                    <li class="list-group-item list-group-item-info mb-1 h-75">
                        <h5 style="color: darkblue">{{$users['name']}} :</h5>
                        {{  \App\Message::select('text')->where('from_user_id',$users['id'])->get() }}

                    </li>
                @elseif($message['to_user_id']==$users['id'])
                    <li class="list-group-item list-group-item-danger ml-5 mb-1" >
                        <h5 style="color: darkred">ADMIN :</h5>
                        {!!  \App\Message::select('text')->where('to_user_id',$users['id'])->get()  !!}
                    </li>
                @endif
            @endforeach
        </ul>
    @endif
</div>--}}
{{--
/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 13.07.2017
 * Time: 3:44
 */--}}
