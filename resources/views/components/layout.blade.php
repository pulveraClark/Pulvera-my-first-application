<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading ?? 'My Site' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="mx-auto max-w-6xl px-4 flex justify-between items-center h-14">
            <a href="/" class="text-lg font-semibold tracking-tight text-gray-900">
                JobBoard
            </a>
            <div class="space-x-4">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs*')">Jobs</x-nav-link>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="bg-gray-50 border-b">
        <div class="mx-auto max-w-6xl px-4 py-6">
            <h1 class="text-2xl font-bold text-gray-900">
                {{ $heading }}
            </h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="mx-auto max-w-6xl px-4 py-8">
        {{ $slot }}
    </main>

    <footer class="mx-auto max-w-6xl px-4 py-6 text-sm text-gray-500 border-t text-center">
        &copy; {{ date('Y') }} JobBoard. All rights reserved.
    </footer>

</body>
</html>
