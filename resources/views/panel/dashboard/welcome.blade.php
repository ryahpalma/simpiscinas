<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Bem vindo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6 sm:px-20">
                    <div class="mt-8 text-2xl">Bem vindo, {{ Auth::user()->name }}</div>
                    <div class="mt-6 text-gray-500">Realize suas publicações e alterações utilizando os menus acima, é fácil e prático.</div>
                    <div class="mt-6">
                        <a class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition hover:border-gray-300 hover:text-gray-700 focus:border-gray-300 focus:text-gray-700 focus:outline-none" href="https://ryahpalma.dev/contact">
                            Suporte Online
                        </a>
                        <a class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition hover:border-gray-300 hover:text-gray-700 focus:border-gray-300 focus:text-gray-700 focus:outline-none" href="/email">
                            Acessar E-mail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
