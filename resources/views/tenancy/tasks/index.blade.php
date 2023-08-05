<x-tenancy-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tareas
        </h2>
    </x-slot>
    <x-container class="py-12">
        <div class="flex justify-end mb-6">
            <a href="{{ route('tasks.create') }}" class="btn btn-blue">Nuevo</a>
        </div>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nombre </th>
                        <th scope="col" class="px-6 py-3">
                            Descripción
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $task->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $task->description }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-end space-x-1">
                                    <a href="{{ route('tasks.show', $task) }}" class="btn btn-blue">Ver</a>
                                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-green">Editar</a>
                                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-red">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </x-container>
</x-tenancy-layout>
