@extends ('layouts.base')
@section('content')
    <section>
        <div class="container">
            <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">
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

            <nav class="nav-item">

                <a href="{{route('index')}}"><i class="icon-home bg-dark"></i>Home</a>

            </nav>
        </div>
    </section>
    <div class="container">
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
@endsection