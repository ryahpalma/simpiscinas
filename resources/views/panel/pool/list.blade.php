<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Lista de Piscinas') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="flex items-center justify-end bg-gray-50 px-4 py-3 text-right shadow sm:px-6">
                    <x-button href="{{ route('pool.create') }}">{{ __('Cadastrar') }}</x-button>
                </div>
                <div class="border-b border-gray-200 bg-white p-6 sm:px-20">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table class="w-full text-left text-sm text-gray-500">
                            <thead class="text-xs uppercase text-gray-700">
                                <tr>
                                    <th scope="col" class="py-3 px-4">
                                        Título
                                    </th>
                                    <th scope="col" class="py-3 px-4">
                                        Linha
                                    </th>
                                    <th scope="col" class="py-3 px-4">
                                        Valor
                                    </th>
                                    <th scope="col" class="py-3 px-4">
                                        Data
                                    </th>
                                    <th scope="col" class="py-3 px-4">
                                        Ação
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pools as $pool)
                                    <tr class="border-b">
                                        <th class="truncate whitespace-nowrap py-4 px-6 font-medium text-gray-900">
                                            {{ $pool->title }}
                                        </th>
                                        <td class="truncate py-4 px-4">
                                            {{ $pool->line }}
                                        </td>
                                        <td class="truncate py-4 px-4">
                                            R${{ $pool->measurement_price }}
                                        </td>
                                        <td class="truncate py-4 px-4">
                                            {{ $pool->updated_at->format('d/m/Y') }}
                                        </td>
                                        <td class="truncate py-4 px-4">
                                            <x-button href="{{ route('pool.edit', ['id' => $pool->id]) }}" class="mb-1 lg:mb-0">Editar</x-button>

                                            <x-button href="{{ route('pool.delete.do', ['id' => $pool->id]) }}">Deletar</x-button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
