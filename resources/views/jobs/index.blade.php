<x-layout>
    <x-slot:heading>Available Jobs</x-slot:heading>

    <div class="mb-6 flex justify-end">
        <a href="/jobs/create" class="bg-indigo-600 text-white px-3 py-2 rounded">Create Job</a>
    </div>

    <ul class="divide-y divide-gray-200">
        @foreach ($jobs as $job)
            <li class="py-4">
                <a href="/jobs/{{ $job->id }}" class="block hover:bg-gray-50 rounded px-4 py-3 transition">
                    <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                    <div><strong>{{ $job->title }}</strong> — {{ $job->salary }}</div>
                </a>

                <div class="mt-2">
                    @foreach($job->tags as $tag)
                        <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">{{ $tag->name }}</span>
                    @endforeach
                </div>
            </li>
        @endforeach
    </ul>

    <div class="mt-6">
       {{ $jobs->links() }}
    </div>
</x-layout>
