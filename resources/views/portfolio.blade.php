@extends ('layouts.base')
@section('content')
    <div class="container">
    <link href="{{('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <script src="{{('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}"></script>
    <script src="{{('//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="{{('https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap')}}" rel="stylesheet">
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

    <section id="team" class="pb-5 row animated zoomIn bg-info"  style="animation-delay: 3s;">
        <div class="container ">
            <h5 class="section-title h1 text-center animated bounce infinite">Hi welcome to my portfolio section</h5>
            <div class="row pb-5 row animated zoomIn"  style="animation-delay: 3s;">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip ">
                        <div class="mainflip ">
                            <div class="frontside">
                                <div class="card bg-gray">
                                    <div class="card-body text-center">
                                        @foreach( $project as $pro )
                                        <p><img class=" img-fluid" src="{{$pro->image}}" alt="card image"></p>
                                        <h4 class="card-title">{{$pro->project_title}}</h4>
                                        <p class="card-text">{{$pro->description}}</p>
                                        <a href="{{$pro->source_code}}" class="btn btn-primary btn-sm"><i class="fa fa-github"></i></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection