@extends('layouts.master')

@push('stylesheet')
    @vite(['resources/sass/app.scss'])
@endpush

@section('content')
    <x-subnavbar>{{ __('Somos Sim Piscinas') }}</x-subnavbar>
    <x-hero-colorful align="left" color="blue">
        <x-slot name="title">
            Somos a solução no mercado de piscinas
        </x-slot>

        <x-slot name="description">
            Nós utilizamos modelos de piscinas elegantes e de alta qualidade, sempre garantindo o melhor custo-benefício do mercado. Nossas instalações seguem um método próprio, mantendo sempre um padrão no acabamento, satisfazendo todos nossos clientes.
        </x-slot>

        <x-slot name="button">
            <x-button-pink href="{{ route('budget') }}" class="h-10 w-64 uppercase">
                {{ __('Solicitar Orçamento') }}
            </x-button-pink>
        </x-slot>

        <x-slot name="image">
            <div class="grid transform grid-cols-2 gap-2 lg:translate-y-10">
                <div class="translate-y-5 -rotate-6 scale-110 transform">
                    <img class="rounded-md shadow-md" src="{{ asset('img/content/pages/about-girl-and-parents_W_620px.webp') }}" alt="" loading="lazy">
                </div>
                <div class="rotate-6 scale-110 transform">
                    <img class="rounded-md shadow-md" src="{{ asset('img/content/pages/about-mother-and-son_W_620px.webp') }}" loading="lazy">
                </div>
                <div class="translate-x-36 -translate-y-12 rotate-2 scale-110 lg:scale-90 transform">
                    <img class="rounded-md shadow-md" src="{{ asset('img/content/pages/about-woman-swimming_W_620px.webp') }}" loading="lazy">
                </div>
            </div>
        </x-slot>
    </x-hero-colorful>
    <x-hero-colorful align="right" color="white">
        <x-slot name="title">
            Somos líderes no segmento
        </x-slot>

        <x-slot name="description">
            A Sim Piscinas é a melhor franquia no ramo para investir e administrar. Nosso modelo de negócios é organizado e testado, nossas piscinas de fibra são distribuidas direto da fábrica.
        </x-slot>

        <x-slot name="button">
            <x-button-blue href="{{ route('franchise') }}" class="h-10 w-64 uppercase">
                {{ __('Seja um Franqueado') }}
            </x-button-blue>
        </x-slot>

        <x-slot name="image">
            <img class="mx-auto w-3/4" src="{{ asset('img/content/pages/franchise.webp') }}" loading="lazy" alt="Franquias">
        </x-slot>
    </x-hero-colorful>
@endsection

@push('scripts')
    @vite(['resources/js/app.js'])
@endpush