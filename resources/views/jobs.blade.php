<x-layout>
    <x-slot:heading>Available Jobs</x-slot:heading>

    <ul class="divide-y divide-gray-200">
        @foreach ($jobs as $job)
            <li class="py-4">
                <a href="/jobs/{{ $job['id'] }}"
                   class="block hover:bg-gray-50 rounded px-2 py-1 transition">
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-900">{{ $job['title'] }}</span>
                        <span class="text-gray-500 text-sm">{{ $job['salary'] }}</span>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
