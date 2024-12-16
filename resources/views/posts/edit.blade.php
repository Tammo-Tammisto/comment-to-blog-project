@extends('partials.layout')
@section('title', 'Edit Post')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 w-1/2 shadow-xl mx-auto">
            <div class="card-body">
                <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}">
                    @csrf
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Title</span>

                        </div>
                        <input name="title" type="text" placeholder="Title" value="{{old('title') ?? $post->title}}" class="input input-bordered @error('title') input-error @enderror w-full"/>
                        <div class="label">
                            @error('title')
                                <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </div>
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Content</span>

                        </div>
                        <textarea rows="12" name="body" placeholder="Write something cool..." class="textarea textarea-bordered @error('body') textarea-error @enderror w-full">{{old('body') ?? $post->body}}</textarea>
                        <div class="label">
                            @error('body')
                                <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </div>
                    </label>

                    <div class="flex justify-end items-center gap-2">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
