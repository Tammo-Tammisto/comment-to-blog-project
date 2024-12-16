@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="container mx-auto">
        @include('partials.post-card', ['full' => true])

        {{-- Display existing comments --}}
        @foreach($post->comments()->latest()->get() as $comment)
            <div class="card bg-base-300 shadow-xl mt-3">
                <div class="card-body">
                    {{$comment->body}}
                    <p class="text-base-content">{{$comment->user->name}}</p>
                    <p class="text-neutral-content">{{$comment->created_at->diffForHumans()}}</p>
                </div>
            </div>
        @endforeach

        {{-- Comment form --}}
        <div class="card bg-base-200 shadow-xl mt-5">
            <div class="card-body">
                <form method="POST" action="{{ route('comments.store') }}">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="form-control">
                        <textarea name="body" class="textarea textarea-bordered" placeholder="Write a comment..."></textarea>
                        @error('body')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Post Comment</button>
                </form>
            </div>
        </div>
    </div>
@endsection
