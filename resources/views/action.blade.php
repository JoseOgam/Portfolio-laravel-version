@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="card-body">
            <div class="row">
                <h3 class="col-12 text-center card-header" style="text-decoration: blink">edit portfolio</h3>
                <table class="table table-bordered table-dark table-hover">
                    <div class="text-center card-tools">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Project title</th>
                            <th>description</th>
                            <th>github url</th>
                            <th width="#" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($project as $pro)
                            <tr>
                                <td>{{$pro->id}}</td>
                                <td>{{$pro->project_title}}</td>
                                <td>{{$pro->description}}</td>
                                <td>{{$pro->source_code}}</td>
                                <td>
                                    <form action="#" method="#">

                                        <a class="btn btn-success ui-icon-search" href="">Show</a>

                                        <a class="btn btn-primary" href="{{url('edit')}}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </div>
                </table>

            </div>
        </div>
    </section>
@endsection
