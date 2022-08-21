@extends('layouts.master')

@push('stylesheet')
    @vite(['resources/sass/app.scss'])
@endpush

@section('content')
    <x-subnavbar>{{ __('Ouvidoria') }}</x-subnavbar>

    <x-hero-colorful align="left" color="white">
        <x-slot name="title">
            Garantia de Ponta
        </x-slot>

        <x-slot name="description">
           Prezamos muito a satisfação dos nossos clientes, se você deseja acionar a garantia de algum de nossos serviços ou produtos, preencha seus dados no formulário abaixo, ou entre em contato conosco por e-mail ou telefone.
        </x-slot>

        <x-slot name="button">
            <x-button-blue href="tel:1235000046" class="h-10 w-64 uppercase">
                {{ __('Ligue para (12) 3500-0046') }}
            </x-button-blue>
        </x-slot>

        <x-slot name="image">
            <img class="mx-auto w-2/4" src="{{ asset('img/content/pages/warranty.webp') }}" alt="Franquias">
        </x-slot>
    </x-hero-colorful>

    <div class="flex justify-center pt-4">
        @if (Session::get('status'))
            <div class="mx-auto font-bold text-green-600">Mensagem enviada com sucesso.</div>
        @endif
    </div>

    <x-ombudsman-form url="/mail/ombudsman">
        <x-slot name="title">
            Entre em contato com a ouvidoria
        </x-slot>
        <x-slot name="description">
            Preencha seus dados com suas informações de compra e adicione as informações na mensagem para avaliar-mos seu pedido.
        </x-slot>
        <x-slot name="action">
            <button type="submit" class="bg-pink-accent-800 hover:bg-pink-accent-700 active:bg-pink-accent-900 inline-flex h-12 w-64 items-center justify-center rounded-md border border-transparent px-4 py-2 text-[0.9rem] text-xs font-semibold uppercase tracking-widest text-white transition focus:border-gray-900 focus:outline-none focus:ring focus:ring-gray-300 disabled:opacity-25" href="{{ route('privacy') }}">
                Enviar Mensagem
            </button>
        </x-slot>
    </x-ombudsman-form>
@endsection

@push('scripts')
    @vite(['resources/js/app.js'])
@endpush