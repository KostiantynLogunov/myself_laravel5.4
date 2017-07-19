@if(isset($menu))
    <nav class="navbar navbar-toggleable navbar-light bg-faded fixed-top">
        <a class="navbar-brand nav-link" data-toggle="tab" href="#Home"><img src="{{ asset('assets/img/Koss_logo_2 kopie.png') }}" alt="logo" height="30"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#startupNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="startupNavbar">

            <ul class="navbar-nav">

                @foreach($menu as $item)
                    <li class="nav-item">
                        <a class="nav-link {{ ($item['title'] == "Home") ? 'active' :'' }}" data-toggle="tab" href="#{{ $item['alias'] }}">{{ $item['title'] }} <span class="sr-only">(current)</span></a>
                    </li>
                @endforeach

                {{--Все формується в контролері!!! В шаблоні відображаємо тільки інфу конкретних зміних patern MVS--}}

               {{-- <li class="nav-item">
                    <a class="nav-link active " data-toggle="tab" href="#Home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Portfolio">Portfolio</a>
                </li>--}}
                <li class="nav-item">
                    {{--<a class="btn btn-primary" href="/admin">Sign in</a>--}}
                    @if (Auth::guest())
                        {{--<li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>--}}
                        <a class="btn btn-primary" href="/admin">Sign in</a>
                    @else
                        <a class="btn btn-primary mr-1" href="/admin">In Cabinet</a>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-secondary" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu " role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <div class="pl-3">Logout</div>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                </li>
            </ul>
        </div>
    </nav>
@endif

{{--
/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 10.07.2017
 * Time: 12:20
 */--}}
