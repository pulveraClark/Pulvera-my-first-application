<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading ?? 'My Site' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!-- Navigation -->
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0 text-white font-bold text-xl">
                        MySite
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                {{ $heading }}
            </h1>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

</body>
</html>
