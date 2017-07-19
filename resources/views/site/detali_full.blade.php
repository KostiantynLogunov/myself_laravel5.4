<div class="container" style="color: whitesmoke">
    <div class="row justify-content-center p-3">
        <h3>{{$name_prj}}</h3>
    </div>
    <div class="row pb-3 pt-3">
        <img class="img-responsive" src="{{ asset('assets/img/portfolio/'.$img_prj) }}" alt="{{$name_prj}}">
    </div>
    <div class="row">
        <p>
            {!! $text_prj!!}
        </p>
    </div>
</div>
{{--
/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 17.07.2017
 * Time: 14:18
 */--}}
