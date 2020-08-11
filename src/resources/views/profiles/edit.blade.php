@extends('layouts.app')

@section('content')

<form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">

    @csrf
    @method('PATCH')


    <div class="form-group row">
        <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

        <div class="col-md-6">
            <input class="border border-gray-400 p-2 w-full" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>

            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>
    
        <div class="col-md-6">

            <div class="flex">
            <input class="border border-gray-400 p-2 w-full" id="avatar" type="file" class="form-control @error('username') is-invalid @enderror" name="avatar" value="{{ $user->avatar }}" autofocus>

            <img src="{{$user->avatar}}"  alt="your avatar" width="40"/>

            </div>

            @error('avatar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

        <div class="col-md-6">
            <input class="border border-gray-400 p-2 w-full" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>



    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>

        <div class="col-md-6">
            <input class="border border-gray-400 p-2 w-full" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

        <div class="col-md-6">
            <input class="border border-gray-400 p-2 w-full" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-6">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

        <div class="col-md-6">
            <input class="border border-gray-400 p-2 w-full" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="px-6 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                Submit
            </button>

            <a href="{{ $user->path() }}" class="hover:underline">Cancel</a>
        </div>
    </div>

</form>

@endsection