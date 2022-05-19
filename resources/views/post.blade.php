@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($post as $ps)
        <div class="card mb-3">
            <div class="card-body">
                <a href="/home/{{$ps->slug}}"><h5>{{$ps->title}}</h5></a>
            </div>
            <div class="card-footer">
                <small>{{$ps->user->name}} ( {{$ps->user->email}} )</small>
            </div>
        </div>
    @endforeach
</div>
@endsection