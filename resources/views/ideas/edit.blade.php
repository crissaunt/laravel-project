<x-layout title="Welcome!">

    <h1>Welcome Idea</h1>

    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')
            <label for="description">new description</label>
        <textarea name="description" id="description" rows="10" cols="30">{{ $idea->description }}</textarea>
        <button type="submit">Save</button>
        <x-forms.error name="description"/>
    </form>




    <x-card></x-card>


</x-layout>
