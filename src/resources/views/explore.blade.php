@extends('layouts.app')

@section('content')

<div>

@foreach ($users as $user)

<img src="{{ $user->avatar }}" alt="{{ $user->username}}'s avatar" width="60"/>




@endforeach

</div>


@endsection