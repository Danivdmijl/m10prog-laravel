<nav>
    <ul class="flex">
        <li class="mr-3 px-4 @if(Route::currentRouteName() == 'blog.home') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('home') }}">Home</a></li>
        <li class="mr-3 px-4 @if(Route::currentRouteName() == 'blog.about') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('about') }}">About</a></li>
    </ul>
</nav>