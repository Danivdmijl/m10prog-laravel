@vite('resources/css/app.css')

<h2 class="font-semibold text-xl text-dark dark:text-black-200 leading-tight">
    {{ ('Projecten') }}
</h2>

<div class="py-12 bg-black">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg">
            <h2>Dit is de projecten pagina</h2>
            <div class="p-6 text-white">
                @foreach($projects as $project)
                <a class="text-black" href="{{$project->title}}">{{ $project->titel }}</a><br>
                @endforeach
                {{$projects->links()}}

            </div>
            @auth
            <a href="{{route('url.create')}}" class="bg-green hover:bg-green text-black font-bold py-2 px-4 rounded float-right">
                {{ __('New project button') }}
            </a>
            @endauth

        </div>
    </div>
</div>