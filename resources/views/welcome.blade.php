@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="container mx-auto">
        <div class="my-2 text-center">
        {{ $posts->links() }}
        </div>
        <div class="grid grid-cols-4 gap-4">
            @foreach ($posts as $post)
                @include('partials.post-card')
            @endforeach
        </div>
    </div>

@endsection
