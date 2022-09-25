@extends('layouts.master')

@push('stylesheet')
    @vite(['resources/sass/app.scss'])
@endpush

@section('content')
    <x-subnavbar>{{ __(ucfirst($line) . ' › Modelos Disponíveis') }}</x-subnavbar>

    <div class="mx-auto px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-20">
        <div class="mb-2 flex w-full flex-col flex-wrap items-center justify-center gap-12 hover:flex-wrap-reverse lg:flex-row">
            <div class="grid grid-rows-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @forelse ($pools as $pool)
                    <div title="{{ $pool->title }}">
                        <a href="/piscina/{{ $pool->id }}/{{ str_replace([' ', '/', '.'], '-', mb_strtolower($pool->title)) }}/detalhes">
                            <div class="h-full max-w-sm flex-col rounded-md border border-gray-300 bg-white shadow-md hover:shadow-xl">
                                <img class="h-80 lg:h-72 w-full rounded-t-md bg-slate-100" loading="lazy" src="{{ asset('storage/pools/' . explode(',', $pool->images)[0]) }}" alt="{{ $pool->model }}">
                                <div class="flex flex-col justify-between px-5 pb-5 pt-2">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <span class="text-xl font-medium text-gray-900">R$ {{ $pool->measurement_price }}</span>
                                        <span class="text-sm font-medium text-green-600">{!! substr($total = $pool->measurement_price - $pool->measurement_price * (10 / 100), 0, 2) !!}% OFF</span>
                                    </div>
                                    <p class="text-md my-2 font-medium text-green-600">Instalação inclusa</p>
                                    <h5 class="text-md flex-grow font-semibold tracking-tight text-gray-900">{{ $pool->title }}</h5>
                                    <p class="mt-2.5">
                                        @php
                                            if (strpos($pool->measurement, 0) === 0) {
                                                $fixedMeasurement = ltrim($pool->measurement, $pool->measurement[0]);
                                                echo $fixedMeasurement;
                                            } else {
                                                echo $pool->measurement;
                                            }
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-span-4 py-20">
                        <h1 class="text-center text-lg font-medium text-gray-600">Modelos não encontrados...</h1>
                        <p class="text-center text-sm font-normal text-gray-500">Volte novamente mais tarde</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite(['resources/js/app.js'])
@endpush
