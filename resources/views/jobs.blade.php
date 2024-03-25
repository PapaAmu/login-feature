<x-layout title="Jobs">
    

    <x-slot:heading>
        Available Jobs
    </x-slot:heading>
    

    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/1">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year
            </a>
        </li>

    @endforeach





</x-layout>