@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center">
    <div class="px-16 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="col-md-8">
            <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>


            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase text-xs text-gray-700">Username</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="border border-gray-400 p-2 w-full" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase text-xs text-gray-700">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="border border-gray-400 p-2 w-full" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase text-xs text-gray-700">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="border border-gray-400 p-2 w-full" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase text-xs text-gray-700">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="border border-gray-400 p-2 w-full" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-6">
                    <label for="password-confirm" class="block mb-2 uppercase text-xs text-gray-700">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="border border-gray-400 p-2 w-full"name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection