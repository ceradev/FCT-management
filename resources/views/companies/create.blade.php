<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dar de alta una nueva empresa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __("DAR DE ALTA LA EMPRESA") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('companies.store') }}">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="name">Name of the company</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter the name of the company" name="name">
                        </div>
                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" class="form-control" id="url" placeholder="Enter the url here" name="url">
                        </div>
                        <div class="form-group">
                            <label for="mode">Mode</label>
                            <input type="text" class="form-control" id="mode" placeholder="Enter the mode here" name="mode">
                        </div>
                        <div class="form-group">
                            <label for="description">Description of the company</label>
                            <input type="text" class="form-control" id="description" placeholder="Enter the description" name="description">
                        </div>
                        <button type="submit" class="btn btn-primary">Dar de alta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
