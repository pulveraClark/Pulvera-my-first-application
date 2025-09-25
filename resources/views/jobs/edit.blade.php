<x-layout>
    <x-slot:heading>Edit Job</x-slot:heading>

    <p class="mt-2 text-gray-600">Update the job details below.</p>

    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6 mt-6">
        <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-6">
            @csrf
            @method('PATCH')

            <!-- Job Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-900">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $job->title) }}"
                    placeholder="Shift Leader"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-lg py-3" required>
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Salary -->
            <div>
                <label for="salary" class="block text-sm font-medium text-gray-900">Salary</label>
                <input type="text" name="salary" id="salary" value="{{ old('salary', $job->salary) }}"
                    placeholder="$50,000 per year"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-lg py-3" required>
                @error('salary')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="flex space-x-4">
                <button type="submit"
                    class="inline-flex justify-center rounded-md bg-indigo-600 py-3 px-6 text-white text-sm font-medium shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Update Job
                </button>

                <a href="/jobs"
                    class="inline-flex justify-center rounded-md bg-gray-200 py-3 px-6 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-300">
                    Cancel
                </a>
            </div>
        </form>

        <!-- Delete Job -->
        <form method="POST" action="/jobs/{{ $job->id }}" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="inline-flex justify-center rounded-md bg-red-600 py-3 px-6 text-white text-sm font-medium shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                Delete Job
            </button>
        </form>
    </div>
</x-layout>
