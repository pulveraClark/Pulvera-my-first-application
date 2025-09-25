<x-layout>
    <x-slot:heading>Job Details</x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6 mt-6">
        <!-- Job Title -->
        <h2 class="text-2xl font-bold text-gray-900">{{ $job->title }}</h2>

        <!-- Salary -->
        <p class="mt-4 text-gray-700 text-lg"><span class="font-semibold">Salary:</span> {{ $job->salary }}</p>

        <!-- Actions -->
        <div class="mt-6 flex space-x-4">
            <a href="/jobs/{{ $job->id }}/edit"
                class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-4 text-white text-sm font-medium shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Edit Job
            </a>
            <a href="/jobs"
                class="inline-flex justify-center rounded-md bg-gray-200 py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-300">
                Back to Jobs
            </a>
        </div>
    </div>
</x-layout>
