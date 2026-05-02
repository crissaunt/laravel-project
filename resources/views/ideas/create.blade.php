<x-layout title="Welcome!">



    <h1>Welcome Idea</h1>

    <form method="POST" action="/ideas">
        @csrf
        <label for="description">new description</label>
        <textarea name="description" id="description" class="textarea w-full @error('description') textarea-error  @enderror" rows="10" cols="30"></textarea>

        <button type="submit">Save</button>
        <x-forms.error name="description" />
    </form>









    <x-card></x-card>


</x-layout>
