<!doctype html>
<html lang="en">
<head>
    <title>JoseOgam &mdash; portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

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

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <a class="navbar-brand" href="#home-section">
                    <img class="rounded-circle" src="{{('images/credo_img_1.jpg')}}" alt="" height="80" width="80">
                </a>

                <div class="">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="#home-section" class="nav-link">Home</a></li>
                            <li><a href="#about-section" class="nav-link">Skills</a></li>
                            <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                            <li><a href="#services-section" class="nav-link">I do..</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="text-left">


                    <nav class="site-navigation position-relative" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="#contact-section" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>


                    <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;">
                        <a href="#" class="site-menu-toggle js-menu-toggle float-right">
                            <span class="dropdown">
                                <p class="btn smoothscroll btn-info">Menu</p>
                            </span>
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </header>


    <div class="site-blocks-cover overlay bg-light" id="home-section">

        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="text-white">Hi, am Joseph</h1>
                            <p class="text-secondary">Junior full-stack Web application Developer</p>
                            <p class="lead">This is a platform where i sum up what i do, skills and technologies i use
                                to implement my projects.</p>
                            <p><a href="#contact-section" class="btn smoothscroll btn-primary">Contact Me</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <img src="{{('images/blog5.jpg')}}" alt="Image" class="img-face">

    </div>

    <div class="site-section bg-dark" id="services-section">
        <div class="container">
            <div class="row ">
                <div class="col-12 mb-5 position-relative">
                    <h2 class="section-title text-center mb-5 text-light">I do...</h2>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="service d-flex h-100">
                        <div class="service-number mr-4"><span class="icon-developer_board"></span></div>
                        <div class="service-about">
                            <h3>Web Design</h3>
                            <p> As a web designer i work on the appearance, layout and Appearance,
                                for instance, relates to the colors,
                                font, and images used. Layout refers to how information is structured and categorized.
                                A good web design is easy to use, aesthetically pleasing, and suits the user group and
                                brand
                                of the website.
                                My keystone of a web design is to output a site that wins and fosters the trust of
                                the target audience, removing as many potential points of user frustration as possible
                                is a critical consideration.</p></div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="service d-flex h-100">
                        <div class="service-number mr-4"><span class="icon-desktop"></span></div>
                        <div class="service-about">
                            <h3>Web Development</h3>
                            <p> I write code that enables website functionality,
                                per the owner's, users requirements. This deals with the non-design aspect of building
                                websites, which includes coding and writing markup.

                                Web development ranges from creating plain text pages to complex web-based applications,
                                social network applications and electronic business applications.

                                The web development hierarchy is as follows: </p>
                            <ul>
                                <li>Client-side coding</li>
                                <li>Server-side coding</li>
                                <li> Database technology</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-secondary" id="about-section">
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
                    <strong class="text-black">Wordpress</strong>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                             aria-valuemax="100"
                             style="width: 55%;">
                            <span class="bg-dark">55%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <strong class="text-black">Mysql</strong>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                             aria-valuemax="100"
                             style="width: 75%;">
                            <span class="bg-dark">75%</span>
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
            </div>

        </div>
    </div>
</div>

<section class="site-section bg-info">
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
                <h2 class="section-title text-center text-white mb-5">Say Hello</h2>
            </div>
        </div>
        @if(\Session::has('success'))
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
        <form action="{{ action('ChatController@store') }}" method="post" class="form">
            {{ csrf_field() }}
            <div class="row mb-4">
                <div class="form-group col-6">
                    <input type="text" class="form-control" placeholder="First name" name="first_name">
                </div>
                <div class="form-group col-6">
                    <input type="text" class="form-control" placeholder="Last name" name="last_name">
                </div>
            </div>

            <div class="row mb-4">
                <div class="form-group col-12">
                    <input type="email" class="form-control" placeholder="Email address" name="email">
                </div>
            </div>

            <div class="row mb-4">
                <div class="form-group col-12">
                    <input type="text" class="form-control" placeholder="Subject of the message" name="subject">
                </div>
            </div>

            <div class="row mb-4">
                <div class="form-group col-12">
                        <textarea name="message" id="" cols="30" rows="10" class="form-control"
                                  placeholder="Type your message here.."></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <input type="submit" class="btn btn-dark" value="Send Message">
                </div>
            </div>

        </form>
    </div>
</section>
<section class="site-footer">
<footer class="site-section footer" style="background-color: #1d643b">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="footer-title">Follow Me</h3>
                <a href="{{('https://twitter.com/joseogam')}}" class="social-circle p-2"><span class="icon-twitter ">
                    </span></a>
                <a href="{{('https://web.facebook.com/joseph.otieno.963434?ref=bookmarks')}}" class="social-circle p-2">
                    <span class="icon-facebook"></span></a>
                <a href="{{('https://www.instagram.com/joseogam/')}}" class="social-circle p-2"><span
                            class="icon-instagram"></span></a>
                <a href="{{('https://github.com/JoseOgam')}}" class="social-circle p-2"><span
                            class="icon-github"></span></a>
                <a href="{{('https://www.linkedin.com/in/joseph-otieno-73a99b168/')}}" class="social-circle p-2"><span
                            class="icon-linkedin"></span></a>
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
</footer><!-- .site-wrap -->
</section>

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


</body>
</html>