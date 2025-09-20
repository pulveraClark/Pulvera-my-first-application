<x-layout>
    <x-slot:heading>{{ $job->title }}</x-slot:heading>

    <div class="space-y-3 text-gray-700">
        <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>
        <p class="text-lg">Salary: <span class="font-medium">{{ $job->salary }}</span></p>

        <div class="mt-2">
            @foreach($job->tags as $tag)
                <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">{{ $tag->name }}</span>
            @endforeach
        </div>

        <a href="/jobs"
           class="inline-block px-3 py-2 border border-gray-300 rounded hover:bg-gray-100 transition">
           ← Back to Jobs
        </a>
    </div>
</x-layout>
