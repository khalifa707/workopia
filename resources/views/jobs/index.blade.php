<x-layout>
<h1>{{$title}}</h1>
@if($jobs->count() > 0)
<ul>
    @foreach($jobs as $job)
        <li>
            <h3>{{$job->title}}</h3>
            <p>{{$job->description}}</p>
        </li>
    @endforeach
</ul>
@else
<p>No jobs available</p>
@endif
</x-layout>
