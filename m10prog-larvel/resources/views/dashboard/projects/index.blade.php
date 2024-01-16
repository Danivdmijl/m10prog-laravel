@vite('resources/css/app.css')
   
        <h2 class="font-semibold text-xl text-dark dark:text-gray-200 leading-tight">
            In project folder 
            {{ ('Dashboard') }}
        </h2>

    <div class="py-12 bg-black">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                @foreach($projects as $project)
                <a class="text-black" href="{{$project->title}}">{{ $project->titel }}</a><br>
                @endforeach
                {{$projects->links()}}
                </div>
            </div>
        </div>
    </div>