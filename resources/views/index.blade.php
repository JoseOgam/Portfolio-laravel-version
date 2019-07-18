<!doctype html>
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
    <style>
        .flex-wrapper {
            display: flex;
            flex-flow: row nowrap;
        }

        .single-chart {
            width: 33%;
            justify-content: space-around;
        }

        .circular-chart {
            display: block;
            margin: 10px auto;
            max-width: 80%;
            max-height: 250px;
        }

        .circle-bg {
            fill: none;
            stroke: #eee;
            stroke-width: 3.8;
        }

        .circle {
            fill: none;
            stroke-width: 2.8;
            stroke-linecap: round;
            animation: progress 1s ease-out forwards;
        }

        @keyframes progress {
            0% {
                stroke-dasharray: 0, 100;
            }
        }

        .circular-chart.orange .circle {
            stroke: #ff9f00;
        }
        .circular-chart.red .circle {
            stroke: #990000;
        }

        .circular-chart.green .circle {
            stroke: #4CC790;
        }

        .circular-chart.blue .circle {
            stroke: #3c9ee5;
        }

        .percentage {
            fill: #666;
            font-family: sans-serif;
            font-size: 0.5em;
            text-anchor: middle;
        }

    </style>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<section class="hero" id="home">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <a class="hero-brand" href="#home" title="Home">
                    <img class="rounded-circle" src="{{('images/credo_img_1.jpg')}}" alt="" height="80" width="80">
                </a>
            </div>
        </div>

        <div class="col-md-12">
            <h1 class="text-warning">
                Hi, am Joseph
            </h1>
            <p class="text-secondary">Full-stack Web application Developer</p>
            <p class="text-light">This is a platform where i sum up what i do, skills and technologies i use
                to implement my projects.</p>
            <a class="btn btn-full" href="#about">Explore</a>
        </div>
    </div>

</section>
<!-- /Hero -->

<!-- Header -->
<header id="header">
    <div class="row align-items-center justify-content-center">

        <div id="logo" class="pull-left">
            <a href="#home">
                <img src="{{('img/logo-nav.png')}}" alt="" title="">
            </a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="{{(route('index'))}}">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#skills-section">skills</a></li>
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
                <li><a href="#contact-section">Contact me</a></li>
            </ul>
        </nav>
        <!-- #nav-menu-container -->
    </div>
</header>
<!-- #header -->
<!-- About Section -->
<section id="about" class="about-section section-padding" name="about">
    <div class="container">
        <h2 class="section-title wow fadeInUp center">About Me</h2>

        <div class="row">

            <div class="col-md-4 col-md-push-8">
                <div class="biography">
                    <div class="myphoto">
                        <img src="{{('images/blog2.jpg')}}" alt="" height="300px" width="300px">
                    </div>
                    <ul>
                        <li><strong>Name:</strong> Joseph Otieno</li>
                        <li><strong>Phone:</strong> +254 700013671</li>
                        <li><strong>Email:</strong> jotienoochieng@gmail.com</li>
                    </ul>
                </div>
            </div> <!-- col-md-4 -->

            <div class="col-md-8 col-md-pull-4">
                <div class="short-info wow fadeInUp">


                    <p>Hello am Joseph Otieno. Professionally am a software Developer majoring on web design/web
                        development, have been in this development space since 2015. Am experienced in PHP/python web
                        development of SaaS platforms.
                        Another area of my focus is USSD and Messaging.
                    </p>
                    <br><h4>Why Web?</h4>

                    <br>
                    <p>
                        Website development is a way to make people aware of the services and/or products you are
                        offering, understand why your products are relevant and even necessary for them to buy or use,
                        and see which of your company's qualities set it apart from competitors. Displaying this
                        information with high-quality images and thought-out presentation will have a large influence
                        on customers, and it is important to strive towards making your product as relatable and
                        appealing as possible.

                        I build websites that run on the latest software engineering trends of
                        MVC and modular design.</p>
                </div>

                <!--  <div class="short-info wow fadeInUp">
                      <h3>I also Do</h3>

                      <ul class="list-check">
                          <li><a href="#"></a></li>
                          <li><a href="#"></a></li>
                          <li><a href="#"></a></li>
                          <li><a href="#"></a></li>
                      </ul>
                  </div> -->

                <div class="download-button">
                    <a class="btn btn-info btn-lg" href="#contact-section"><i class="fa fa-paper-plane">

                        </i>contact me</a>
                </div>
            </div>


        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section><!-- End About Section -->

<div class="site-section bg-dark" id="skills-section">
    <div class="container">
        <div class="row ">
            <div class="col-12 mb-4 position-relative">
                <h2 class="section-title text-center">My Skills</h2>
            </div>
            <div class="col-md-6 mb-4">
                <strong class="text-info">PHP</strong>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                         aria-valuemax="100"
                         style="width: 70%;">
                        <span class="bg-info">70%</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <strong class="text-danger">Laravel</strong>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                         aria-valuemax="100"
                         style="width: 60%;">
                        <span class="bg-danger">60%</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <strong class="text-warning">Python</strong>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                         aria-valuemax="100"
                         style="width: 70%;">
                        <span class="bg-warning">70%</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <strong class="text-success">Django</strong>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                         aria-valuemax="100"
                         style="width: 55%;">
                        <span class="bg-success">55%</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <strong class="text-info">js/React</strong>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                         aria-valuemax="100"
                         style="width: 40%;">
                        <span class="bg-info">40%</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <strong class="text-success">Android</strong>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                         aria-valuemax="100"
                         style="width: 30%;">
                        <span class="bg-success">30%</span>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <h2>
                    More On Skills
                </h2>

                <p class="text-light">
                    Web Design, Web Development, Problem solving and search optimization
                </p>
                <div class="flex-wrapper">
                    <div class="single-chart">
                        <svg viewbox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg"
                                  d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="circle"
                                  stroke-dasharray="90, 100"
                                  d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <text x="18" y="20.35" class="percentage">90%</text>
                        </svg>
                        <p class="text-light">web design</p>
                    </div>

                    <div class="single-chart">
                        <svg viewbox="0 0 36 36" class="circular-chart green">
                            <path class="circle-bg"
                                  d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="circle"
                                  stroke-dasharray="85, 100"
                                  d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <text x="18" y="20.35" class="percentage">85%</text>
                        </svg>
                        <p class="text-light">web development</p>
                    </div>

                    <div class="single-chart">
                        <svg viewbox="0 0 36 36" class="circular-chart blue">
                            <path class="circle-bg"
                                  d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="circle"
                                  stroke-dasharray="98, 100"
                                  d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <text x="18" y="20.35" class="percentage">98%</text>
                        </svg>
                        <p class="text-light">problem solving</p>
                    </div>
                    <div class="single-chart">
                        <svg viewbox="0 0 36 36" class="circular-chart red">
                            <path class="circle-bg"
                                  d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="circle"
                                  stroke-dasharray="60, 100"
                                  d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <text x="18" y="20.35" class="percentage">60%</text>
                        </svg>
                        <p class="text-light">Search Optimization</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="site-section" style="background-color: #3b5998">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 position-relative">
                <h2 class="section-title text-center mb-5 text-white">Testimonials</h2>
            </div>
        </div>
        <div class="owl-carousel slide-one-item">
            <div class="slide">
                <blockquote>
                    <p>oh! i like the way you do this coding staff.</p>
                    <p><cite>&mdash; Nancy Auma</cite></p>
                </blockquote>
            </div>
            <div class="slide">
                <blockquote>
                    <p>Its always nice working with you Joe my blog is up and runnig</p>
                    <p><cite>&mdash; Hamisi Chelagat</cite></p>
                </blockquote>
            </div>
            <div class="slide">
                <blockquote>
                    <p>You made it so simple. My new site is so much faster and easier to work with than my old site.
                        I just choose the page, make the change and click save.

                        Thanks, man</p>
                    <p><cite>&mdash; Margaret Awino, CEO Street Food</cite></p>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<section class="site-section bg-dark" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 position-relative">
                <h2 class="section-title text-center text-white mb-5">contact me</h2>
            </div>
        </div>

        <div class="row justify-content-center text-light">
            <div class="col-lg-3 col-md-4">
                <div class="info">
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p class="text-light">Oginga Odinga Street<br>Kisumu Town</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p class="text-light">jotienoochieng@gmail.com</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p class="text-light">+254700013671</p>
                    </div>

                </div>
            </div>

            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <strong>{{ \Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show">
                            <strong>{{ $error }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="col-lg-5 col-md-8">
                <div class="form">
                    <form action="{{ action('ChatController@store') }}" method="post" class="form border">
                        {{ csrf_field() }}
                        <div class="row mb-4">
                            <div class="form-group col-6">
                                <label>
                                    <input type="text" class="form-control" placeholder="First name" name="first_name">
                                </label>
                            </div>
                            <div class="form-group col-6">
                                <label>
                                    <input type="text" class="form-control" placeholder="Last name" name="last_name">
                                </label>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="form-group col-12">
                                <label>
                                    <input type="email" class="form-control" placeholder="Email address" name="email">
                                </label>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="form-group col-12">
                                <label>
                                    <input type="text" class="form-control" placeholder="Subject of the message"
                                           name="subject">
                                </label>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="form-group col-12">
                                <label for=""></label><textarea name="message" id="" cols="15" rows="10"
                                                                class="form-control"
                                                                placeholder="Type your message here.."></textarea>
                            </div>
                        </div>


                        <div class="text-center">
                            <input type="submit" class="btn btn-outline-info" value="Send Message">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div>
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
</div>
<div class="col-lg-12">
    <a class="scrolltop" href="#"><span class="icon-angle-up"></span></a>
</div>

<script src="{{('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{('js/jquery-ui.js')}}"></script>
<script src="{{('js/popper.min.js')}}"></script>
<script src="{{('js/bootstrap.min.js')}}"></script>
<script src="{{('js/owl.carousel.min.js')}}"></script>
<script src="{{('js/jquery.easing.1.3.js')}}"></script>
<script src="{{('js/aos.js')}}"></script>
<script src="{{('js/jquery.fancybox.min.js')}}"></script>
<script src="{{('js/jquery.sticky.js')}}"></script>

<script src="{{('js/main.js')}}"></script>
<script src="{{('lib/jquery/jquery.min.js')}}"></script>
<script src="{{('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{('lib/superfish/superfish.min.js')}}"></script>
<script src="{{('lib/tether/js/tether.min.js')}}"></script>
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

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5d2d4b179b94cd38bbe78a2e/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->


</body>
</html>