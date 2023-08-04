<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Inquilinos
        </h2>
    </x-slot>

    <x-container class='py-12'>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('tenants.update', $tenant) }}" method="POST">
                    @csrf
                    @method('put')

                    <div class="mb-4">
                        <input-label>Nombre</input-label>
                        <x-text-input class="w-full" name="id" type='text' value="{{ old('id', $tenant->id) }}"
                            placeholder='Ingrese Nombre' />
                        <x-input-error :messages="$errors->first('id')" />
                    </div>
                    <div class="flex justify-end">
                        <button class="btn btn-blue">
                            Actualizar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-container>
</x-app-layout>
