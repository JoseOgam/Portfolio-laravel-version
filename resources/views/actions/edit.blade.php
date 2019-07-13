@extends('layouts.base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update project</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('actions.update', $project->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="first_name">project_title:</label>
                    <label>
                        <input type="text" class="form-control" name="first_name" value={{ $project->project_title }} />
                    </label>
                </div>

                <div class="form-group">
                    <label for="last_name">description:</label>
                    <label>
                        <input type="text" class="form-control" name="last_name" value={{ $project->description }} />
                    </label>
                </div>

                <div class="form-group">
                    <label for="email">github url:</label>
                    <label>
                        <input type="text" class="form-control" name="email" value={{ $project->source_code }} />
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection