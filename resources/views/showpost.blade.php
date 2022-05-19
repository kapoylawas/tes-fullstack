@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <h3 class="text-center">{{$post->title ?? ''}}</h3>
            <p class="justify-content">{{$post->content ?? ''}}</p>
        </div>
        <div class="card-footer">
            <small>{{$post->user->name ?? ''}} ( {{$post->user->email ?? ''}} ) - {{($post->created_at ?? '')}}</small>
        </div>
    </div>
    <form action="/store-post" method="POST" class="mb-5">
        @csrf
        @guest
            @php
                $name = "Guest User";
                $email = "guest@email.com";
            @endphp
        @else
            @php
                $name = Auth::user()->name;
                $email = Auth::user()->email;
            @endphp
        @endguest
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <input type="hidden" name="post_id" value="{{$post->id ?? ''}}">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly value="{{$email}}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{$name}}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="website" class="form-label">Website</label>
                    <input type="text" name="website" class="form-control" id="email" aria-describedby="emailHelp" {{ old('website') }}>
                </div>
            </div>
        </div>
        <div class="row">
            <label for="floatingTextarea2">Comments</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="comment" {{ old('comment') }}></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2 float-right">Submit</button>
    </form>
    <h5>Comment</h5>

    @include('flash-message')

    @foreach ($comment as $cm)
        <div class="card mb-3">
            <div class="card-header">
                <p>{{$cm->name}}</p>
            </div>
            <div class="card-body">
                <p>{{$cm->comment}}</p>
            </div>
            <div class="card-footer">
                <small>{{$cm->created_at}}</small>
            </div>
        </div>
    @endforeach
</div>
@endsection