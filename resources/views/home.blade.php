@extends('panel')

@section('content')
    <section class="content">
        <table class="table table-striped table-dark table-hover">
            <div class="text-center card-tools">
                <h3 class="header">chats</h3>
            </div>
            <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>subject</th>
                <th>message</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $chat as $cha )
            <tr>
                <td>{{$cha->id}}</td>
                <td>{{$cha->first_name}}</td>
                <td>{{$cha->last_name}}</td>
                <td>{{$cha->email_address}}</td>
                <td>{{$cha->subject}}</td>
                <td>{{$cha->message}}</td>
            </tr>
                @endforeach
            </tbody>
        </table>

    </section>

@endsection
