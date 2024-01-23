<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
  .navcolor {
    background: black;
  }
</style>

<body class="bg-blue-100 p-4 content">
  <nav class="navcolor space-x-4 bg-black-100">
    @include("_navigation")
  </nav>

  <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard.url')">
    {{ __('Dashboard') }} 
  </x-nav-link>

  <x-nav-link :href="route('project')" :active="request()->routeIs('project')">
    {{ __('View Projects') }} 
  </x-nav-link>

  <h1 class="text-2xl font-semibold text-gray-800 mb-4">Talwind test title</h1>
  <div class="bg-primary text-white font-heading">
    tailwind.config.js custom design
  </div>


</body>

</html>