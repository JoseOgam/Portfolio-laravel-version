<!DOCTYPE html>
<html lang="en">

<head>
    <title>JoseOgam &mdash; portfolio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('fontsome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{('css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{('css/aos.css')}}">

    <link rel="stylesheet" href="{{('css/styl.css')}}">

    <link href="{{('img/favicon.ico')}}" rel="icon">

    <link href="{{('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{('css/style.css')}}" rel="stylesheet">
</head>

<body>
<!-- Header -->
<header id="header">
    <div class="row align-items-center justify-content-center">
        <!--<div id="logo" class="pull-left">
            <a href="index.html"><img src="img/logo-nav.png" alt="" title="" ></a>
        </div> -->

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="{{(route('index'))}}">Home</a></li>
                <li><a href="{{(route('portfolio'))}}">Portfolio</a></li>
                <li><a href="#">Blog</a></li>
                <li class="menu-has-children"><a href="">Products</a>
                    <ul>
                        <li><a href="{{(route('brand'))}}">Branding</a></li>
                        <li class="menu-has-children"><a href="#">Web Design & Development</a>
                            <ul>
                                <li><a href="{{(route('personal'))}}">Personal websites</a></li>
                                <li><a href="{{(route('startup'))}}">Startup websites</a></li>
                                <li><a href="{{(route('log'))}}">Blog</a></li>
                                <li><a href="{{(route('bizz'))}}">Business websites</a></li>
                            </ul>
                        </li>
                        <li><a href="#">SEO services</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- #header -->
<div class="">
    <section id="team" class="pb-5 row animated zoomIn bg-gray" style="animation-delay: 3s;">
        <div class="container ">
            <div class="">
                <h5 class="section-title h4 text-center animated bounce infinite comment-text" style="">Hi welcome
                    to my portfolio
                    section</h5>
                <h6 class="section-title h6 text-center">This is the section where
                    i take you through my code</h6>
            </div>
            <!-- portfolio-->
            <section id="team" class="pb-5">
                <div class="container">
                    <div class="row">
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
            <span class="fa fa-arrow-up"></span>
        </a>
    </div>
</div>
<!-- Required JavaScript Libraries -->
<script src="{{('lib/jquery/jquery.min.js')}}"></script>
<script src="{{('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{('lib/superfish/superfish.min.js')}}"></script>
<script src="{{'lib/tether/js/tether.min.js'}}"></script>
<script src="{{('lib/stellar/stellar.min.js')}}"></script>
<script src="{{('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{('lib/counterup/counterup.min.js')}}"></script>
<script src="{{('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{('lib/easing/easing.js')}}"></script>
<script src="{{('lib/stickyjs/sticky.js')}}"></script>
<script src="{{('lib/parallax/parallax.js')}}"></script>
<script src="{{('lib/lockfixed/lockfixed.min.js')}}"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="{{('js/custom.js')}}"></script>

<script src="{{('contactform/contactform.js')}}"></script>

</body>
</html>
