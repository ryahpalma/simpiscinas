<nav x-data="{ open: false }" class="bg-blue-accent-800">
    <div class="mx-auto px-4 py-2 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:py-4 lg:px-8">
        <div class="relative flex items-center justify-between">
            <a href="/" aria-label="{{ config('app.name') }}" title="{{ config('app.name') }}" class="inline-flex items-center">
                <x-logo class="h-9 w-auto lg:h-12" />
            </a>
            <ul class="hidden items-center space-x-8 text-sm lg:flex">
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex font-semibold uppercase leading-4 tracking-wide text-white transition-colors duration-200 hover:text-gray-300">
                                {{ __('Piscinas') }}
                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link href="/linha/confort">
                            {{ __('Linha Confort') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="/linha/standard">
                            {{ __('Linha Standard') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="/linha/praia">
                            {{ __('Linha Praia') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="/linha/retangular">
                            {{ __('Linha Retangular') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="/linha/spa">
                            {{ __('Linha Spa') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="/linha/personalize">
                            {{ __('Linha Personalize') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>

                <x-nav-link href="{{ route('franchise') }}">
                    {{ __('Seja um Franqueado') }}
                </x-nav-link>

                <x-nav-link href="{{ route('budget') }}">
                    {{ __('Orçamento') }}
                </x-nav-link>

                <x-nav-link href="{{ route('doubts') }}">
                    {{ __('Dúvidas') }}
                </x-nav-link>

                <x-nav-link href="{{ route('ombudsman') }}">
                    {{ __('Ouvidoria') }}
                </x-nav-link>

                <x-nav-link href="{{ route('about') }}">
                    {{ __('Sobre') }}
                </x-nav-link>
            </ul>
            <ul class="hidden items-center space-x-8 text-sm lg:flex">
                <li>
                    <a href="tel:1235000046" class="bg-pink-accent-800 hover:bg-pink-accent-400 focus:shadow-outline inline-flex h-10 w-full items-center justify-center rounded px-4 font-semibold uppercase tracking-wide text-white shadow-md transition duration-200 focus:outline-none" aria-label="Número Vendas" title="Número Vendas">
                        Ligue Agora!
                    </a>
                </li>
            </ul>
            <div class="lg:hidden">
                <button x-on:click="open = ! open" class="inline-flex items-center justify-center rounded-md p-2 text-white transition duration-150 ease-in-out hover:text-gray-500 focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <div :class="{ 'block': open, 'hidden': !open }" class="absolute top-0 left-0 z-50 hidden w-full sm:hidden">
                    <div class="bg-blue-accent-800 rounded border-2 p-5 shadow-md">
                        <div class="mb-4 flex items-center justify-between">
                            <div>
                                <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                                    <x-logo class="h-12 w-auto" />
                                </a>
                            </div>
                            <div>
                                <button x-on:click="open = ! open" aria-label="Close Menu" title="Close Menu" class="focus:shadow-outline -mt-2 -mr-2 rounded p-2 transition duration-200 hover:bg-blue-300 focus:bg-gray-200 focus:outline-none">
                                    <svg class="w-5 text-white" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <nav>
                            <ul class="space-y-4 text-sm">
                                <x-dropdown align="left" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex font-semibold uppercase leading-4 tracking-wide text-white transition-colors duration-200 hover:text-gray-300">
                                                {{ __('Piscinas') }}
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link href="/linha/confort">
                                            {{ __('Linha Confort') }}
                                        </x-dropdown-link>
                
                                        <x-dropdown-link href="/linha/standard">
                                            {{ __('Linha Standard') }}
                                        </x-dropdown-link>
                
                                        <x-dropdown-link href="/linha/praia">
                                            {{ __('Linha Praia') }}
                                        </x-dropdown-link>
                
                                        <x-dropdown-link href="/linha/retangular">
                                            {{ __('Linha Retangular') }}
                                        </x-dropdown-link>
                
                                        <x-dropdown-link href="/linha/spa">
                                            {{ __('Linha Spa') }}
                                        </x-dropdown-link>

                                        <x-dropdown-link href="/linha/personalize">
                                            {{ __('Linha Personalize') }}
                                        </x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>

                                <x-nav-link href="{{ route('franchise') }}">
                                    {{ __('Seja um Franqueado') }}
                                </x-nav-link>

                                <x-nav-link href="{{ route('budget') }}">
                                    {{ __('Orçamento') }}
                                </x-nav-link>

                                <x-nav-link href="{{ route('doubts') }}">
                                    {{ __('Dúvidas') }}
                                </x-nav-link>

                                <x-nav-link href="{{ route('ombudsman') }}">
                                    {{ __('Ouvidoria') }}
                                </x-nav-link>

                                <x-nav-link href="{{ route('about') }}">
                                    {{ __('Sobre Nós') }}
                                </x-nav-link>
                                <li>
                                    <a href="tel:1235000046" class="bg-pink-accent-800 hover:bg-pink-accent-400 focus:shadow-outline inline-flex h-10 w-full items-center justify-center rounded px-4 font-semibold uppercase tracking-wide text-white shadow-md transition duration-200 focus:outline-none" aria-label="Número Vendas" title="Número Vendas">
                                        Ligue Agora!
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
