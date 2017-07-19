<div class="tab-content py-5 container">

@if(isset($pages) && is_object($pages))

    @foreach($pages as $k=>$page)
        @if($k%2 == 0)

                <div class="tab-pane active text-center" id="{{ $page->alias }}">
                    <div class="container animated" style="visibility: visible; animation-name: zoomIn;">
                        {!! $page->text !!}
                        @if(!empty($page->images))
                            {{--{!! Html::image('assets/img/my_logo3.png','img') !!}--}}
                        <img class="img-responsive" src="{{ asset('assets/img/'.$page->images) }}" alt="myLogo" style="max-height: 100px;">
                        @endif

                        {{--<h1 class="display-3">Hello I'm Kostiantyn Logunov.</h1>
                        <p class="lead">I'm a freelance front-end & back-end web developer
                            who loves PHP and JavaScript</p>
                        <p>I see startup. I go in your future...</p>--}}
                        <hr style="border:solid #e3e3e3;border-width: 1px 0 0; width: 50%">
                        <div class="soc" style="display: flex; justify-content: center;">
                            <ul id="social" class="nav  nav-justified" style="color: #fff; " >
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.facebook.com/kostiantyn.logunov"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://plus.google.com/u/0/112136100480396485947"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.linkedin.com/in/kostiantyn-logunov-4551a0115/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link" href="https://www.instagram.com/kostiantyn_bmw/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://secure.skype.com/portal/overview"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://vk.com/id79944868"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            @else

                <div class="tab-pane  text-left" id="{{ $page->alias }}">
                    <div class=" animated " style=	"visibility: visible; animation-name: fadeInUp;">
                        <div class="col-xs-12 text-center">
                            <h3 class="pb-3" style="color: #026AA5;">Profile</h3>
                            <p class="lead pb-3">I'm a creative PHP webdeveloper</p>
                            <hr width="80%" color="white">
                        </div>

                        <div class="container-fluid">
                            <div class="row ">
                                <div class="col-xs-12 col-md-4">
                                    <h3 class="pb-3" style="color: #026AA5;">{!! $page->name !!}</h3>
                                    {!!   $page->text !!}
                                </div>

                                <div class="col col-md-4 ">
                                    <img src="{{ asset('assets/img/'.$page->images) }}" alt="Wellcome" class="rounded-circle img-thumbnail animated img-responsive" style="visibility: visible; animation-name: zoomIn;">

                                </div>

                                <div class="col col-md-4 h-50">
                                    <h3 class="pb-3" style="color: #026AA5;">Details</h3>
                                    <h5>Name:</h5>
                                    Kotiantyn Logunov
                                    <h5>Age:</h5>
                                    30 years
                                    <h5>Location:</h5>
                                    Vinnitsia, Ukraine, Earth <br><br>
                                    <a target="_blank" href="https://github.com/KostiantynLogunov" class="mx-SocialButton">
									<span class="mx-SocialButton-icon mx-SocialButton-icon--gihub">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.6.11.793-.26.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.73.083-.73 1.205.085 1.84 1.238 1.84 1.238 1.07 1.834 2.806 1.304 3.49.997.108-.776.42-1.306.763-1.605-2.665-.305-5.467-1.334-5.467-5.93 0-1.312.47-2.382 1.236-3.222-.125-.303-.536-1.524.116-3.176 0 0 1.008-.322 3.3 1.23A11.51 11.51 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.29-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.236 1.91 1.236 3.22 0 4.61-2.807 5.625-5.48 5.922.43.372.824 1.102.824 2.222v3.293c0 .32.192.694.8.576C20.567 21.796 24 17.3 24 12c0-6.627-5.373-12-12-12z"></path>
										</svg>
									</span>
                                        <span class="mx-SocialButton-text">Follow me</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
    @endforeach



@endif


@if(isset($portfolios) && is_object($portfolios))
        <div class="tab-pane" id="Portfolio" style="height: 90%" >
            <div class="container ">
                <div class="row animated  " style="animation-name: fadeInLeft;" >

                    @foreach($portfolios as $portfolio)
                            <div class="col-4 col-lg-4 col-sm-4 pr-2 text-center "  >
                                <a href="portfolio/{{$portfolio->id}}" target="_blank" {{--data-toggle="modal" data-target="#exampleModalLong"--}}>
                                    <img src="{{ asset('assets/img/portfolio/'.$portfolio->images) }}" class="img-responsive" height="150px" alt="1">
                                    <div class="project-category ">
                                        {{ $portfolio->filter }}
                                    </div>
                                    <div class="project-name pb-5">
                                        {{ $portfolio->name }}
                                    </div>
                                </a>
                                <!-- Modal -->
                               {{-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content" >
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #0000cc">Project {!!  $portfolio->name!!}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="color: #0000cc" id="qwe">
                                                {!!  $portfolio->text  !!}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                                <!-- Modal -->

                            </div>

                    @endforeach

                </div>
            </div>

        </div>
@endif
</div>



{{--/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 10.07.2017
 * Time: 12:24
 */--}}
