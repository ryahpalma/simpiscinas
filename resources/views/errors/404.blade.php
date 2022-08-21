@extends('layouts.master')

@push('stylesheet')
    @vite(['resources/sass/app.scss'])
@endpush

@section('content')
    <x-subnavbar>{{ __('Não encontrado') }}</x-subnavbar>

    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl py-12 px-4 lg:py-24 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="text-blue-accent-800 mb-4 text-7xl font-extrabold tracking-tight lg:text-9xl">404</h1>
                <p class="text-gray-90 mb-4 text-3xl font-bold tracking-tight md:text-4xl">A página não existe.</p>
                <p class="mb-4 text-lg font-light text-gray-700">Desculpe, mas não conseguimos encontrar essa página. Você encontrará mais coisas na página inicial. </p>
                <a href="/" class="bg-blue-accent-800 hover:bg-primary-800 focus:ring-primary-300 my-4 inline-flex rounded-lg px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4">Voltar a Página Inicial</a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    @vite(['resources/js/app.js'])
@endpush
