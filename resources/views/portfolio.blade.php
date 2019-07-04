@extends ('layouts.base')
@section('content')
    <section class="nav-header row align-items-center justify-content-center">
        <nav class="nav-item">

            <a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a>

        </nav>
    </section>
    <section>
        <div class="container">
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
        </div>
    </section>
    <div class="">
        <section id="team" class="pb-5 row animated zoomIn bg-info" style="animation-delay: 3s;">
            <div class="container ">
                <h5 class="section-title h4 text-center animated bounce infinite">Hi welcome to my portfolio
                    section</h5>
                <table class="table table-bordered table-dark table-hover">
                    <div class="text-center card-tools">
                    </div>
                    <thead>
                    <tr>

                        <th>project title</th>
                        <th class="text-center">description</th>
                        <th>source code</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $project as $pro )
                        <tr>
                            <div><td>{{$pro->project_title}}</td></div>
                            <div><td>{{$pro->description}}</td></div>
                            <div><td>  <a href="{{$pro->source_code}}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-github"></i>source code</a></td>
                            </div>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <div class="site-footer">
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
    </div>

@endsection