<nav>
    <ul class="flex">
        <li class="mr-3 px-4 @if(Route::currentRouteName() == 'blog.home') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('home') }}">Home</a></li>
        <li class="mr-3 px-4 @if(Route::currentRouteName() == 'blog.about') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('about') }}">About</a></li>
        <li class="mr-3 px-4 @if(Route::currentRouteName() == 'blog.about') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('project.show', ['show' => 1]) }}">project</a></li>
        @guest
        <li class="mr-3 px-4 @if(Route::currentRouteName() == 'login') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('login') }}">login</a></li>
        @endguest

        @auth
        <li class="mr-3 px-4 @if(Route::currentRouteName() == 'dashboard') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        @endauth
    </ul>
</nav>