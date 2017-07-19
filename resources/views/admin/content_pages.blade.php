<div class="container pt-3">
    @if($pages)
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

                @foreach($pages as $k => $page)
                        <tr>
                            <td>{{ $page->id }}</td>
                            <td>{!!   Html::link(route('pagesEdit',['page'=>$page->id]),$page->name,['alt'=>$page->name]) !!}</td>
                            <td>{{ $page->alias }}</td>
                            <td>{{ $page->text }}</td>
                            <td>{{ $page->created_at }}</td>
                            <td>{!! Form::open(['url'=>route('pagesEdit',['page'=>$page->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                                {!! Form::hidden('_method','delete') !!}
                                {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                            {!! Form::close() !!}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    @endif

        {!!   Html::link(route('pagesAdd'),'Add New page'   ) !!}
</div>

{{--
/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 11.07.2017
 * Time: 13:41
 */--}}
