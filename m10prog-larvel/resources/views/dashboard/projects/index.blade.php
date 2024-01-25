@vite('resources/css/app.css')

<h2 class="font-semibold text-xl text-dark dark:text-black-200 leading-tight">
    {{ ('Projecten') }}
</h2>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

            <h2 class="font-semibold text-xl text-dark dark:text-black-200 leading-tight mb-4">
                {{ __('Projecten') }}
            </h2>

            <div class="text-white">
                @foreach($projects as $project)
                <div class="mb-4">
                    <a class="text-blue-500 hover:underline" href="{{route('projects.edit', $project)}}">{{ $project->titel }}</a><br>
                    @auth
                    <a href="{{route('projects.edit', $project)}}" class="text-white bg-green-500 hover:bg-green-700 py-1 px-2 rounded">
                        Wijzig
                    </a>
                    <div>
                        <form action="{{ route('projects.destroy', ['project' => $project]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="text-white bg-red-500 hover:bg-red-700 py-1 px-2 rounded" type="submit">Verwijderen</button>
                        </form>

                    </div>
                    @endauth
                </div>
                @endforeach
                {{ $projects->links() }}
            </div>

            @auth
            <a href="{{ route('projects.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">
                {{ __('New project button') }}
            </a>
            @endauth

        </div>
    </div>
</div>