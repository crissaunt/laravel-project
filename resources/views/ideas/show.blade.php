<x-layout title="Welcome!">

    <h1>Welcome Idea</h1>

    <div>
        <h1>
            {{ $idea->state }}-{{ $idea->description }}
        </h1>
    </div>

    


    <a href="/ideas/{{ $idea->id }}/edit">Edit</a>
    <button type="submit" form="delete-idea-form">Delete</button>

    <form id="delete-idea-form" method="POST" action="/idea/{{ $idea->id }}">
    @csrf
    @method("DELETE")
    </form>


    <x-card></x-card>


</x-layout>
