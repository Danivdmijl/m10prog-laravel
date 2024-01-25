@vite('resources/css/app.css')

<title>Projecten bewerken</title>

<h2 class="font-semibold text-xl text-dark dark:text-black-200 leading-tight">
    Je gaat nu dit project bewerken: {{ $project->titel }}
</h2>



<div class="py-12 bg-black">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="grid grid-cols-1 gap-6">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('projects.update', ['project' => $project]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    @include('dashboard.projects.form', ['project' => $project])
                    <button type="submit" class="border">Updaten</button>
                </form>
            </div>
        </div>
    </div>
</div>