@extends('layouts.app')

@section('content')
    <!--Card-->
    <div class="container">
        <div class="card indigo text-center z-depth-2 light-version py-4 px-5">
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
            <form class="md-form" action="{{ action('ProjectController@store') }}" method="post">
                {{ csrf_field() }}
                <div class="file-field">
                    <div class="btn btn-outline-white waves-effect btn-sm float-left">
                        <span>project pic<i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i></span>
                        <input type="file" name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate text-white" type="text" placeholder="Upload your file">
                    </div>
                </div>

                <hr class="w-100 my-4">

                <div class="row mb-4">
                    <div class="form-group col-6">
                        <input type="text" class="form-control" placeholder="project title" name="project_title">
                    </div>
                </div>
                <hr class="w-100 my-4">

                <div class="col-12 text-center">
                    <div class="form-group col-12">
                        <textarea name="description" id="" cols="10" rows="5" class="form-control"
                                  placeholder="project description"></textarea>
                    </div>
                </div>
                <hr class="w-100 my-4">

                <div class="row mb-4">
                    <div class="form-group col-6">
                        <input type="text" class="form-control" placeholder="project github url" name="source_code">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="submit" class="btn btn-dark" value="Post project">
                    </div>
                </div>

            </form>

        </div>
        <!--/.Card-->
    </div>
@endsection