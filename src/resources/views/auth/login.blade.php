@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center">
    <div class="px-16 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="col-md-8">

            <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>


            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase text-xs text-gray-700">Email</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="border border-gray-400 p-2 w-full" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase text-xs text-gray-700">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="border border-gray-400 p-2 w-full" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="m-6">
                    <div>
                        <input class="mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>
                </div>

               <div class="mb-6">

                   <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                       Submit
                   </button> 

                   <a href="{{ route('password.request')}}" class="text-xs text-gray-700">Forgot Your Password?</a>

                   <a href="register">Register</a>


               </div>
            </form>
        </div>
    </div>
</div>
@endsection