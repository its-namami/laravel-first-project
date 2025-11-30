<x-layout>
    <x-slot:heading>{{ $title }}</x-slot:heading>

    <x-job-information>
        <x-slot:jobTitle>{{ $title }}</x-slot:jobTitle>
        <x-slot:jobDescription>{{ $description }}</x-slot:jobDescription>
        <x-slot:jobType>{{ $type }}</x-slot:jobType>
        <x-slot:jobLocation>{{ $location }}</x-slot:jobLocation>
    </x-job-information>
</x-layout>
