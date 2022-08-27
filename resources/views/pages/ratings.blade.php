@extends('layouts.master')

@push('stylesheet')
    @vite(['resources/sass/app.scss'])
@endpush

@section('content')
    <x-subnavbar>{{ __('Avaliações') }}</x-subnavbar>

    <div class="mx-auto px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-20">
        <div class="mb-2 flex w-full flex-col flex-wrap items-center justify-center gap-12 hover:flex-wrap-reverse lg:flex-row">
            <div class="grid grid-rows-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @for ($i = 1; $i <= 20; $i++)
                    <img class="rounded-lg" alt="Avaliação Sim Piscinas" loading="lazy" src="{{ asset('img/content/ratings/' . $i . '.webp') }}">
                @endfor 
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite(['resources/js/app.js'])
@endpush
