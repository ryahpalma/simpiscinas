@extends('layouts.master')

@push('stylesheet')
    @vite(['resources/sass/app.scss'])
@endpush

@section('content')
    <x-subnavbar>{{ __('Franqueado Sim') }}</x-subnavbar>

    <div class="flex justify-center pt-4">
        @if (Session::get('status'))
            <div class="mx-auto font-bold text-green-600">Mensagem enviada com sucesso.</div>
        @endif
    </div>

    <x-contact-form url="/mail/franchise">
        <x-slot name="title">
            Seja um Franqueado
        </x-slot>
        <x-slot name="description">
            Tenha muitas vantagens sendo um Franqueado Sim Piscinas, adquira nossas estratégias e modelos de piscinas que vendem o ano todo.
        </x-slot>
        <x-slot name="action">
            <button type="submit" class="bg-pink-accent-800 hover:bg-pink-accent-700 active:bg-pink-accent-900 inline-flex h-12 w-64 items-center justify-center rounded-md border border-transparent px-4 py-2 text-[0.9rem] text-xs font-semibold uppercase tracking-widest text-white transition focus:border-gray-900 focus:outline-none focus:ring focus:ring-gray-300 disabled:opacity-25" href="{{ route('privacy') }}">
                Enviar Mensagem
            </button>
        </x-slot>
    </x-contact-form>
    <x-hero-colorful align="left" color="pink">
        <x-slot name="title">
            Seja um Franqueado Sim
        </x-slot>

        <x-slot name="description">
            A Sim Piscinas é uma excelente opção para você que pretende entrar para o Ramo de Piscinas, nossos métodos são testados e aprovados, minimizando o risco de você investir em um novo negócio.
        </x-slot>

        <x-slot name="button">
            <x-button-blue href="{{ route('about') }}" class="h-10 w-64 uppercase">
                {{ __('Sobre Nós') }}
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
