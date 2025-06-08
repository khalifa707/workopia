<x-layout>
    <ul>
        @forelse($jobs as $job)
            <li>{{ $job->title }} - {{$job->description}}</li>
        @empty
            <li>No jobs found</li>
        @endforelse
    </ul>
</x-layout>
