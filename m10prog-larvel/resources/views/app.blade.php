<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <!-- Include the Tailwind CSS stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Layout Container -->
    <div class="container mx-auto p-8">

        <!-- Header with Logo and Menu -->
        <header class="flex justify-between items-center mb-8">
            <div>
                <!-- Your Logo -->
                <img src="your-logo.png" alt="Your Logo" class="w-16 h-16">
            </div>
            <nav>
                <!-- Navigation Menu -->
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-blue-500 hover:text-blue-700">Home</a></li>
                    <li><a href="#" class="text-blue-500 hover:text-blue-700">About</a></li>
                    <li><a href="#" class="text-blue-500 hover:text-blue-700">Contact</a></li>
                    <!-- Add more menu items as needed -->
                </ul>
            </nav>
        </header>

        <!-- Main Content Goes Here -->

    </div> <!-- End Layout Container -->

    <!-- Footer with Copyright -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>

</body>
</html>
