@vite('resources/css/app.css')

<title>Projecten aanmaken</title>

<h2 class="font-semibold text-xl text-dark dark:text-black-200 leading-tight">
    {{ ('Projecten aanmaken') }}
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


                <form action="{{ route('projects.store') }}" method="POST">
                    @csrf
                    @include('dashboard.projects.form',
                    [
                    'route'=>route('projects.store'),
                    'method'=>'post',
                    'project'=>new \App\Models\Project()
                    ]
                    ) <button type="submit" class="border">Opslaan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>