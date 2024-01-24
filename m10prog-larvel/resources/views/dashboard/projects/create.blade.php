@vite('resources/css/app.css')

<title>Projecten aanmaken</title>

<h2 class="font-semibold text-xl text-dark dark:text-gray-200 leading-tight">
    {{ ('Projecten aanmaken') }}
</h2>

<div class="py-12 bg-black">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="grid grid-cols-1 gap-6">

                <form action="{{ route('url.store') }}" method="POST">
                    @csrf
                    <label class="block">
                        <span class="text-gray-700">Titel</span>
                        <input type="text" name="title" class="mt-1 block w-full" placeholder="">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Description</span>
                        <textarea name="description" class="mt-1 block w-full" rows="3"></textarea>
                    </label>
                    <button type="submit" class="border">Opslaan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>