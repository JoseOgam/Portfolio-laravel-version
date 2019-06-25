@extends('layouts.app')

@section('content')
    <!--Card-->
    <div class="card indigo text-center z-depth-2 light-version py-4 px-5">

        <form class="md-form" action="#">
            <div class="file-field">
                <div class="btn btn-outline-white waves-effect btn-sm float-left">
                    <span>Choose file<i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i></span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate text-white" type="text" placeholder="Upload your file">
                </div>
            </div>
        </form>

        <hr class="w-100 my-4">

        <form class="md-form" action="#">
            <div class="file-field">
                <div class="btn btn-outline-white btn-rounded waves-effect btn-sm float-left">
                    <span>Choose files<i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i></span>
                    <input type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate text-white" type="text" placeholder="Upload one or more files">
                </div>
            </div>
        </form>

        <hr class="w-100 my-4">

        <form class="md-form" action="#">
            <div class="file-field">
                <div class="btn btn-outline-white btn-rounded waves-effect btn-sm float-left">
                    <span>Choose files<i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i></span>
                    <input type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate text-white" type="text" placeholder="Upload one or more files">
                </div>
            </div>
        </form>

    </div>
    <!--/.Card-->
@endsection