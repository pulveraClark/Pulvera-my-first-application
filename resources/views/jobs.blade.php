<x-layout>
    <x-slot:heading>Available Jobs</x-slot:heading>

    <ul class="divide-y divide-gray-200">
        @foreach ($jobs as $job)
            <li class="py-4">
                <a href="/jobs/{{ $job->id }}"
                   class="block hover:bg-gray-50 rounded px-2 py-1 transition">
                    <div class="flex flex-col">
                        <div class="text-blue-500 text-sm font-bold">{{ $job->employer->name }}</div>
                        <div>
                            <strong class="font-medium text-gray-900">{{ $job->title }}</strong>
                            <span class="text-gray-600"> — {{ $job->salary }}</span>
                        </div>
                    </div>
                </a>

                <div class="mt-2 px-2">
                    @foreach($job->tags as $tag)
                        <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
