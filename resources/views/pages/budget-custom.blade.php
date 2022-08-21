@extends('layouts.master')

@push('stylesheet')
    @vite(['resources/sass/app.scss'])
@endpush

@section('content')
    <x-subnavbar>{{ __('Orçamento Instantâneo') }}</x-subnavbar>
    
    <div class="flex justify-center pt-4">
        @if (Session::get('status'))
            <div class="mx-auto font-bold text-green-600">Mensagem enviada com sucesso.</div>
        @endif
    </div>

    <x-contact-form url="/mail/budget">
        <x-slot name="title">
            Orçamento {{ $pool->title }}
        </x-slot>
        <x-slot name="description">
            Ao preencher os campos abaixo, você automaticamente concorda com nossos termos de uso e política de privacidade de dados.
        </x-slot>
        <x-slot name="action">
            <button type="submit" class="bg-pink-accent-800 hover:bg-pink-accent-700 active:bg-pink-accent-900 inline-flex h-12 w-64 items-center justify-center rounded-md border border-transparent px-4 py-2 text-[0.9rem] text-xs font-semibold uppercase tracking-widest text-white transition focus:border-gray-900 focus:outline-none focus:ring focus:ring-gray-300 disabled:opacity-25" href="{{ route('privacy') }}">
                Enviar Mensagem
            </button>
        </x-slot>
    </x-contact-form>
@endsection

@push('scripts')
    @vite(['resources/js/app.js'])
@endpush
