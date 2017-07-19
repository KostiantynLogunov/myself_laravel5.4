<div class="container pt-3">
    @if($users)
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

            @foreach($users as $k => $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{!!   Html::link(route('userEdit',['page'=>$user->id]),$user->name,['alt'=>$user->name]) !!}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{!! Form::open(['url'=>route('userEdit',['page'=>$user->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                        {!! Form::hidden('_method','delete') !!}
                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
{{--/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 12.07.2017
 * Time: 19:47
 */--}}
