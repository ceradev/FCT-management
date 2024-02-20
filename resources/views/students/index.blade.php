<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empresas seleccionadas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __("ELECCION DEL ALUMNO") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if ($choices->count() > 0)
            <dl>
                    @foreach($choices as $choice)
                <dt> {{ $companies[$choice->companies_id]->name }} - {{ $companies[$choice->companies_id]->mode }}</dt>
                <dd> {{ $companies[$choice->companies_id]->description }}</dd>
                    @endforeach
            </dl>
                @else
                    <div class="p-6 text-gray-900">
                        <p>No hay empresas seleccionadas</p>
                    </div>
                @endif
</x-app-layout>
