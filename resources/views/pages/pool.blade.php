@extends('layouts.master')

@push('stylesheet')
    @vite(['resources/sass/app.scss', 'resources/sass/_glide.scss'])
@endpush

@push('background-color')
    class="md:bg-gray-200"
@endpush

@php $images = explode(',', $pool->images); @endphp

@section('content')
    <x-subnavbar>{{ __('Produto › ' . $pool->title) }}</x-subnavbar>

    <div x-data="{ open: false }">
        <div class="lg:pt-17 mx-auto px-3 pt-4 pb-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:pb-20 lg:pt-10">
            <div class="flex flex-col items-start justify-between p-5 py-8 md:rounded-md md:border md:bg-white md:p-10 md:py-12 md:shadow-lg lg:flex-row lg:gap-12">
                <div class="flex flex-col lg:w-11/12 xl:w-3/4">
                    <h2 class="max-w-lg font-sans text-xl font-medium tracking-tight text-black xl:text-2xl">{{ $pool->title }}</h2>
                    <h2 class="text-blue-accent-800 mb-2 max-w-lg font-sans text-lg font-medium tracking-tight">{{ $pool->model }}</h2>
                    <h2 class="mb-2 max-w-lg font-sans text-lg font-medium tracking-tight text-green-600">Instalação inclusa</h2>
                    <div class="flex items-center py-2">
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Second star</title>
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Third star</title>
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fourth star</title>
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fifth star</title>
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <span class="ml-2 text-sm font-medium text-gray-500">5 estrelas</span>
                    </div>
                    <div class="flex flex-col justify-between lg:flex-row">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="font-sans text-2xl font-light tracking-tight text-gray-800 xl:text-3xl">R$ {{ $pool->measurement_price }}</span>
                            <span class="xl:text-md text-sm font-medium text-green-600">{!! substr($total = $pool->measurement_price - $pool->measurement_price * (10 / 100), 0, 2) !!}% OFF</span>
                        </div>
                        <div id="buyProduct" class="pt-4 lg:pt-0">
                            <x-button-blue href="{{ route('budget.custom', ['item' => str_replace([' ', '/', '.'], '-', mb_strtolower($pool->title))]) }}" class="lg:w-42 h-10 w-full text-sm uppercase">
                                {{ __('Solicitar Orçamento') }}
                            </x-button-blue>
                        </div>
                    </div>
                    <div class="block py-6 lg:hidden">
                        <x-carousel id="itemMobile" class="grid">
                            <x-slot name="images">
                                @foreach ($images as $image)
                                    <div class="glide__slide bg-gray-200">
                                        <img src="{{ asset('storage/pools/' . $image) }}">
                                    </div>
                                @endforeach
                            </x-slot>
                        </x-carousel>
                    </div>
                    <div class="py-6">
                        <div class="border-t border-gray-200"></div>
                    </div>
                    <p class="text-md mb-2 font-semibold text-black">Dimensões (C x L x P)</p>
                    <h5 class="text-md font-sans font-medium tracking-tight text-gray-700">
                        @php
                            if (strpos($pool->measurement, 0) === 0) {
                                $fixedMeasurement = ltrim($pool->measurement, $pool->measurement[0]);
                                echo $fixedMeasurement;
                            } else {
                                echo $pool->measurement;
                            }
                        @endphp
                    </h5>
                    <div class="py-6">
                        <div class="border-t border-gray-200"></div>
                    </div>
                    <p class="text-md mb-2 font-semibold text-black">Descrição</p>
                    <h5 class="text-md font-sans font-medium tracking-tight text-gray-700">{!! $pool->description !!}</h5>
                    <div class="py-6">
                        <div class="border-t border-gray-200"></div>
                    </div>
                    <p class="text-md mb-2 font-semibold text-black">Itens Inclusos</p>
                    <div class="text-md flex flex-col font-sans font-medium tracking-tight text-gray-700 lg:flex-row lg:space-x-4">
                        <div class="truncate">
                            <li class="ml-1">Frete</li>
                            <li class="ml-1">Escavação</li>
                            <li class="ml-1">Nivelamento/Colocação</li>
                            <li class="ml-1">Calçamento de Banco/Degrau</li>
                            <li class="ml-1">Aterramento</li>
                            <li class="ml-1">Mão de Obra Elétrica</li>
                            <li class="ml-1">Mão de Obra Hidráulica</li>
                        </div>
                        <div class="truncate">
                            <li class="ml-1">Ponto p/ Cascata</li>
                            <li class="ml-1">Hidromassagem</li>
                            <li class="ml-1">Motor</li>
                            <li class="ml-1">Filtro</li>
                            <li class="ml-1">Bomba</li>
                            <li class="ml-1">Kit de Dispositivos</li>
                            <li class="ml-1">Super LED Azul</li>
                        </div>
                    </div>
                </div>
                <div class="grid w-full grid-cols-1">
                    <x-carousel id="itemDesktop" class="hidden lg:block">
                        <x-slot name="images">
                            @foreach ($images as $image)
                                <div class="glide__slide bg-gray-200">
                                    <img src="{{ asset('storage/pools/' . $image) }}">
                                </div>
                            @endforeach
                        </x-slot>
                    </x-carousel>
                    <div class="py-10">
                        <div class="border-t border-gray-200"></div>
                    </div>
                    <div class="grid grid-cols-1 space-y-4 rounded-md bg-gray-100 py-6 px-4 xl:grid-cols-2 xl:space-y-0">
                        <div class="md:mb-4 lg:px-4">
                            <h4 class="mb-2 text-left font-bold text-black">Compre pelo Telefone</h4>
                            <div class="flex flex-col space-y-1 text-[11px] font-medium">
                                <div class="flex flex-row items-center space-x-1">
                                    <i class="bx bx-sm bxl-whatsapp text-green-accent-700"></i>
                                    <p class="text-black">WhatsApp: <a class="font-semibold text-blue-800 hover:underline" href="https://api.whatsapp.com/send/?phone=5512996756652">(12) 99675-6652</a> <span class="text-gray-700">Nacional</span></p>
                                </div>
                                <div class="flex flex-row items-center space-x-1">
                                    <i class="bx bx-sm bx-phone text-green-accent-700"></i>
                                    <p class="text-black">Telefone: <a class="font-semibold text-blue-800 hover:underline" href="tel:551235000046">(12) 3500-0046</a> <span class="text-gray-700">Nacional</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="md:mb-4 lg:px-4">
                            <h4 class="mb-2 text-left font-bold text-black">Compre por E-mail</h4>
                            <div class="flex flex-col text-[11px] font-medium">
                                <div class="flex flex-row items-center space-x-1">
                                    <i class="bx bx-sm bx-envelope text-green-accent-700"></i>
                                    <p class="text-black">E-mail: <a class="font-semibold text-blue-800 hover:underline" href="mailto:contato@simpiscinas.com.br">contato@simpiscinas.com.br</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:px-4">
                            <p class="text-[12px] text-black">* Consulte disponibilidade em sua cidade</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite(['resources/js/app.js', 'resources/js/glide.js'])
@endpush
