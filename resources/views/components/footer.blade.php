<a href="https://api.whatsapp.com/send/?phone=5512996756652" title="Chamar no WhatsApp" class="fixed bottom-10 right-8 z-50 flex h-16 w-16 items-center justify-center rounded-full bg-green-600 text-4xl text-white drop-shadow-lg duration-300 hover:bg-green-700 hover:drop-shadow-2xl">
    <i class='bx bxl-whatsapp'></i>
</a>
<div class="bg-blue-accent-800 relative">
    <svg class="text-blue-accent-800 absolute top-0 -mt-5 h-6 w-full sm:-mt-10 sm:h-16" preserveAspectRatio="none" viewBox="0 0 1440 54">
        <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z">
        </path>
    </svg>
    <div class="mx-auto px-4 pt-12 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
        <div class="mb-8 flex flex-col justify-between lg:flex-row">
            <div class="md:max-w-md">
                <a href="/" aria-label="Retornar" title="{{ config('app.name') }}" class="inline-flex items-center">
                    <x-logo class="h-16 w-auto" />
                </a>
                <div class="mx-auto mt-4 lg:max-w-sm">
                    <p class="text-deep-purple-50 text-sm">
                        Registrada sob CNPJ 30.153.358/0001-15.<br>
                        Empresa do grupo Sim Piscinas.
                    </p>
                </div>
            </div>
            <div class="mt-10 flex flex-row space-x-12">
                <div>
                    <p class="font-semibold tracking-wide text-white">
                        Empresa
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="{{ route('about') }}" class="text-white transition-colors duration-300 hover:text-gray-300">Sobre Nós</a>
                        </li>
                        <li>
                            <a href="{{ route('privacy') }}" class="text-white transition-colors duration-300 hover:text-gray-300">Privacidade</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-white">
                        Contato
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="{{ route('ombudsman') }}" class="text-white transition-colors duration-300 hover:text-gray-300">Ouvidoria</a>
                        </li>
                        <li>
                            <a href="{{ route('budget') }}" class="text-white transition-colors duration-300 hover:text-gray-300">Orçamento</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between border-t border-gray-300 pt-5 pb-10 sm:flex-row">
            <p class="text-sm text-gray-100">
                © Copyright {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados - Desenvolvido por <a href="https://ryahpalma.dev" target="_blank" class="hover:font-bold">Ryan Palma</a>
            </p>
            <div class="mt-4 flex items-center space-x-4 sm:mt-0">
                <a href="https://www.youtube.com/channel/UC9X9ZCdbqkjyd-s737UkQGQ" class="hover:text-pink-accent-800 text-white transition-colors duration-300">
                    <i class='bx bxl-youtube bx-sm'></i>
                </a>
                <a href="https://www.facebook.com/simpiscinas/" class="hover:text-pink-accent-800 text-white transition-colors duration-300">
                    <i class='bx bxl-facebook-circle bx-sm'></i>
                </a>
                <a href="https://www.instagram.com/simpiscinas/" class="hover:text-pink-accent-800 text-white transition-colors duration-300">
                    <i class='bx bxl-instagram-alt bx-sm'></i>
                </a>
            </div>
        </div>
    </div>
</div>
