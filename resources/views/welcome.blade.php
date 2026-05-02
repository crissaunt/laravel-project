<x-layout title="Welcome!">

    <h1 class="text-blue-500 text-2xl font-bold">Welcome Page</h1>

    @forelse ($name as $person )
    <li>{{ $person }}</li>
    @empty
     <li>no person include</li>
    @endforelse




    <x-card/>


</x-layout>
