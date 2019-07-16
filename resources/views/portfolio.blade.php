@extends ('layouts.base')
@section('content')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <section class="nav-header row align-items-center justify-content-center">
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="">
                    <div class="pull-right">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="{{(route('index'))}}" class="nav-link"><i class="fa fa-home">Home</i></a></li>
                                <li><a href="#" class="nav-link"></a></li>
                                <li><a href="#" class="nav-link"></a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="text-left">
                        <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;">
                            <a href="{{(route('index'))}}">
                            <span>
                                <p class="btn smoothscroll btn-info">Home</p>
                            </span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </header>

    </section>
    <section>
        <div class="container">
            <link rel="stylesheet" href="{{('fonts/icomoon/style.css')}}">

            <link rel="stylesheet" href="{{('css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{('css/jquery-ui.css')}}">
            <link rel="stylesheet" href="{{('css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{('css/owl.theme.default.min.css')}}">
            <link rel="stylesheet" href="{{('css/owl.theme.default.min.css')}}">

            <link rel="stylesheet" href="{{('css/jquery.fancybox.min.css')}}">

            <link rel="stylesheet" href="{{('css/bootstrap-datepicker.css')}}">

            <link rel="stylesheet" href="{{('fonts/flaticon/font/flaticon.css')}}">

            <link rel="stylesheet" href="{{('css/aos.css')}}">

            <link rel="stylesheet" href="{{('css/style.css')}}">
        </div>
    </section>
    <div class="">
        <section id="team" class="pb-5 row animated zoomIn bg-gray" style="animation-delay: 3s;">
            <div class="container ">
                <div class="text-truncate">
                    <h5 class="section-title h4 text-center animated bounce infinite comment-text" style="">Hi welcome
                        to my portfolio
                        section</h5>
                </div>
                <!-- portfolio-->
                <section id="team" class="pb-5">
                    <div class="container">
                        <div class="row">
                            <h5 class="section-title h4 col-lg-12">My Work</h5>
                            <!-- Team member -->
                            @foreach($project->chunk(1) as $project)
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                        <div class="mainflip">
                                            <div class="frontside">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        @foreach($project as $pro)
                                                            <p>
                                                                <img class="rounded-circle"
                                                                     src="{{('images/blog2.jpg')}}"
                                                                     alt="card image" height="80" width="80">
                                                            </p>
                                                            <h4 class="card-title">{{$pro->project_title}}</h4>
                                                            <p class="card-text">{{$pro->description}}</p>
                                                            <a href="{{$pro->source_code}}"
                                                               class="btn btn-primary btn-sm"><i
                                                                        class="fa fa-github">source code</i></a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
    <div class="">

        <footer class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h3 class="footer-title">Follow Me</h3>
                        <a href="{{('https://twitter.com/joseogam')}}" class="social-circle p-2"><span
                                    class="fa fa-twitter fa-2x"
                                    style="color: white">
                    </span></a>
                        <a href="{{('https://web.facebook.com/joseph.otieno.963434?ref=bookmarks')}}"
                           class="social-circle p-2">
                            <span class="fa fa-facebook fa-2x" style="color: white"></span></a>
                        <a href="{{('https://www.instagram.com/joseogam/')}}" class="social-circle p-2"><span
                                    class="fa fa-instagram fa-2x" style="color: white"></span></a>
                        <a href="{{('https://github.com/JoseOgam')}}" class="social-circle p-2"><span
                                    class="fa fa-github fa-2x" style="color: white"></span></a>
                        <a href="{{('https://www.linkedin.com/in/joseph-otieno-73a99b168/')}}"
                           class="social-circle p-2"><span
                                    class="fa fa-linkedin fa-2x" style="color: white"></span></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <!-- copyright -->
                        <p class="text-danger">Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script>
                            All rights reserved | Developed <i
                                    class="icon-heart-o" aria-hidden="true"></i> by <a
                                    href="{{('https://github.com/JoseOgam')}}"
                                    target="_blank" class="text-info">JoseOgam</a></p>
                        <!-- Copyright -->

                    </div>
                </div>
            </div>
        </footer>
        <div>
            <a class="scrolltop" href="#">
                <span class="fa fa-angle-up"></span>
            </a>
        </div>
    </div>

@endsection