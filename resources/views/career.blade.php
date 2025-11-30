<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>

    <h1 class="text-2xl mb-8">View current job positions</h1>

    @foreach ($positions as $position)
        <div class="mb-4 p-4 border rounded-lg">
            <h2 class="text-xl font-bold">{{ $position['title'] }}</h2>
            <p class="text-gray-700 mb-8">{{ $position['description'] }}</p>
            <a href="career/{{ $position['slug'] }}" class="text-white bg-blue-600 px-4 py-2 rounded hover:bg-blue-700">
                View Details
            </a>
        </div>
    @endforeach
</x-layout>
