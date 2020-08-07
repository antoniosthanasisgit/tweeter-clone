@extends('layouts.app')

@section('content')

<header class="mb-6 relative">

    <div class="relative">
        <img class="mb-2" src="/images/twitter-backgrounds-background-blue-body.jpg" alt="image header" style="border-radius: 1.25rem; width:700px; height:205px;" />

        <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="left: 50%" width="150">
    </div>




    <div class="flex justify-between items-center mb-6">

        <div>


            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>

            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>


        </div>

        <div class="flex">
            
            @can ('edit', $user)
            <a href="{{ $user->path('edit')}}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
            @endcan

             @can (auth()->user()->isNot($user))
            <form method="POST" action="/profiles/{{ $user->name }}/follow">
                @csrf

                <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">

                    {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}

                </button>
             @endcan

            </form>

        </div>

    </div>

    <p class="text-sm">

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus a, voluptas reprehenderit, minus sapiente voluptate provident temporibus iure aut laudantium nisi magni doloribus similique? Facilis impedit unde eius perferendis saepe!

    </p>

</header>

@include('_timeline',[

'tweets' => $user->tweets
])

@endsection