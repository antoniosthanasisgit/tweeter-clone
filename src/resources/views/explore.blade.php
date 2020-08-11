@extends('layouts.app')

@section('content')

<div>

  @foreach ($users as $user)

  <a href="{{ $user->path() }}" class="flex  mb-4">

    <img src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar" width="60" class="mr-4 rounded" />

    <h4 class="font-bold">
      {{
      '@' . $user->username
    }}
    </h4>







    @endforeach

</div>


@endsection