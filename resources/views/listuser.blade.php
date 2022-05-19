@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">User</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($user as $us)
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$us->name}}</td>
            <td><a class="btn btn-primary" href="/list-comment/{{$us->email}}">Show Comment</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection