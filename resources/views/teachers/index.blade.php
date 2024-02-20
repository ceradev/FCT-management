<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alumnos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __("ELECCION DE LOS ALUMNOS") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <ul>
                    @foreach($choices as $choice)
                    @if(isset($users[$choice->user_id]) && isset($companies[$choice->companies_id]))
                    <li> {{ $users[$choice->user_id]->name }} - {{ $companies[$choice->companies_id]->name }}</li>
                    @endif
                    @endforeach
                </ul>
</x-app-layout>
