@extends('partials.layout')
@section('title', 'Register')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 w-1/2 shadow-xl mx-auto">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Email</span>

                        </div>
                        <input name="email" type="email" placeholder="Email" value="{{old('email')}}" class="input input-bordered @error('email') input-error @enderror w-full" required autofocus autocomplete="username" />
                        <div class="label">
                            @error('email')
                                <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </div>
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Password</span>

                        </div>
                        <input name="password" type="password" placeholder="Password" class="input input-bordered @error('password') input-error @enderror w-full" required autocomplete="current-password"  />
                        <div class="label">
                            @error('password')
                                <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </div>
                    </label>
                    <div class="form-control w-fit ">
                        <label class="label cursor-pointer gap-2">
                          <input type="checkbox" class="toggle" checked="checked" />
                          <span class="label-text">Remember me</span>
                        </label>
                      </div>
                    <div class="flex justify-end items-center gap-2">
                        <a href="{{ route('password.request')}}">Forgot your password?</a>
                        <input type="submit" class="btn btn-primary" value="Login">
                        {{-- <button class="btn btn-primary">Register</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
