@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Comment</th>
            <th scope="col">date</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($comment as $cm)
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$cm->comment}}</td>
            <td>{{$cm->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection