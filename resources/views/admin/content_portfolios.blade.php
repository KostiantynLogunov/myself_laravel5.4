<div class="container pt-3">
    @if($portfolios)
        <table class="table table-inverse   table-sm ">
            <thead>
            <tr>
                <th>№</th>
                <th>Name</th>
                <th>Images</th>
                <th>Filter</th>
                <th>Date created</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($portfolios as $k => $portfolio)
                <tr>
                    <td>{{ $portfolio->id }}</td>
                    <td>{!!   Html::link(route('portfolioEdit',['page'=>$portfolio->id]),$portfolio->name,['alt'=>$portfolio->name]) !!}</td>
                    <td>{{ $portfolio->images }}</td>
                    <td>{{ $portfolio->filter }}</td>
                    <td>{{ $portfolio->created_at }}</td>
                    <td>{!! Form::open(['url'=>route('portfolioEdit',['page'=>$portfolio->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                        {!! Form::hidden('_method','delete') !!}
                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    {!!   Html::link(route('portfolioAdd'),'Add New portfolio'   ) !!}
</div>
{{--
/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 12.07.2017
 * Time: 16:17
 */--}}
