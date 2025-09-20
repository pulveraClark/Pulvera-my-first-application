<x-layout>
    <x-slot:heading>{{ $job['title'] }}</x-slot:heading>

    <div class="space-y-3 text-gray-700">
        <p class="text-lg">Salary: <span class="font-medium">{{ $job['salary'] }}</span></p>
        <a href="/jobs"
           class="inline-block px-3 py-2 border border-gray-300 rounded hover:bg-gray-100 transition">
           ← Back to Jobs
        </a>
    </div>
</x-layout>
