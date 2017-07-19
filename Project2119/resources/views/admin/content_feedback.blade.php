<div class="container pt-3" style="color: whitesmoke">
    @if($users)
        <table class="table   table-sm table-responsive justify-content-center">
            <thead >
            <tr>
                <th>№</th>
                <th>Name</th>


                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $k => $user)
                @if($user->name  != 'admin')
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{!!   Html::link(route('OpenSms',['user'=>$user->id]),$user->name,['alt'=>$user->name]) !!}</td>

                    <td>{!! Form::open(['url'=>route('OpenSms',['user'=>$user->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                        {!! Form::hidden('_method','delete') !!}
                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}</td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    @endif
</div>
{{--/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 13.07.2017
 * Time: 3:20
 */--}}
