<ul>
  <li><a href="{{ route('home', auth()->user()) }}" class="font-bold text-lg mb-4 block">Home</a></li>
  <li><a href="{{ route('explore', auth()->user()) }}" class="font-bold text-lg mb-4 block">Explore</a></li>
  <li><a href="{{ route('profile', auth()->user()) }}" class="font-bold text-lg mb-4 block">Profile</a></li>
  <li><a href="{{route('logout', auth()->user()) }}" class="font-bold text-lg mb-4 block">Logout</a></li>
</ul>