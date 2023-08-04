<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Inquilinos
        </h2>
    </x-slot>

    <x-container class='py-12'>
        <div class="flex justify-end">
            <a href="{{ route('tenants.create') }}" class="btn btn-blue">
                Nuevo
            </a>
        </div>
    </x-container>
</x-app-layout>
