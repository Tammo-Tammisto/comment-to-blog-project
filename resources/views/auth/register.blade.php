@extends('partials.layout')
@section('title', 'Register')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 w-1/2 shadow-xl mx-auto">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Name</span>

                        </div>
                        <input name="name" type="text" placeholder="Name" value="{{old('name')}}" class="input input-bordered @error('name') input-error @enderror w-full" required
                            autofocus autocomplete="name" />
                        <div class="label">
                            @error('name')
                                <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </div>
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Email</span>

                        </div>
                        <input name="email" type="email" placeholder="Email" value="{{old('email')}}" class="input input-bordered @error('email') input-error @enderror w-full" required autocomplete="username" />
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
                        <input name="password" type="password" placeholder="Password" class="input input-bordered @error('password') input-error @enderror w-full" required autocomplete="new-password"  />
                        <div class="label">
                            @error('password')
                                <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </div>
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Confirm Password</span>

                        </div>
                        <input name="password_confirmation" type="password" placeholder="Confirm Password" class="input input-bordered @error('password_confirmation') input-error @enderror w-full" required autocomplete="new-password"  />
                        <div class="label">
                            @error('password_confirmation')
                                <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </div>
                    </label>
                    <div class="flex justify-end items-center gap-2">
                        <a href="{{ route('login')}}">Already registered?</a>
                        <input type="submit" class="btn btn-primary" value="Register">
                        {{-- <button class="btn btn-primary">Register</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
