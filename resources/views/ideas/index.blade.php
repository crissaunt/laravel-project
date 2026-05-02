<x-layout title="Welcome!">
    <h1>Welcome Idea</h1>
     <a href="/ideas/create">create</a>



    @if ($ideas->count())


    <h1>Your Ideas</h1>



    <ul>
        @foreach ($ideas as $idea)
            <li>{{  $idea->description }} - {{ $idea->state }} <a href="/idea/{{ $idea->id }}">show</a></li>
        @endforeach
    </ul>

    @else

    @endif



    <x-card></x-card>


</x-layout>
