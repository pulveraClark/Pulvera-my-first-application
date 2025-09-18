<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My First Application</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navigation -->
  <nav class="bg-white shadow-md">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between items-center h-16">
        <a href="/" class="text-2xl font-bold text-blue-600">Bombsite</a>
        <div class="space-x-6">
          <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
          <a href="/about" class="text-gray-700 hover:text-blue-600">About</a>
          <a href="/contact" class="text-gray-700 hover:text-blue-600">Contact</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="max-w-6xl mx-auto px-4 py-20 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
        {{ $heading ?? '' }}
    </h1>

    {{ $slot }}
  </header>

</body>
</html>
