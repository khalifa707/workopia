<x-layout>
<h1>{{$title}}</h1>
@if(!empty($jobs))
<ul>
    @foreach($jobs as $job)
        <li>{{$job}}</li>
    @endforeach
</ul>
@else
<p>No jobs available</p>
@endif
</x-layout>
