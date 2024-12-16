@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="container mx-auto">
        @include('partials.post-card', ['full' => true])
        @foreach($post->comments()->latest()->get() as $comment)
            <div class="card bg-base-300 shadow-xl mt-3">
                <div class="card-body">
                    {{$comment->body}}
                    <p class="text-base-content">{{$comment->user->name}}</p>
                    <p class="text-neutral-content">{{$comment->created_at->diffForHumans()}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
