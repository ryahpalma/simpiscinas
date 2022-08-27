@extends('layouts.master')

@push('stylesheet')
    @vite(['resources/sass/app.scss', 'resources/sass/_glide.scss'])
@endpush

@section('content')
    <x-carousel id="banner">
        <x-slot name="images">
            @forelse ($carousels as $carousel)
                @foreach ($pools as $pool)
                    @if ($carousel->pool_id == $pool->id)
                        <li class="glide__slide">
                            <a href="/{{ $pool->id }}/{{ str_replace([' ', '/', '.'], '-', mb_strtolower($pool->title)) }}/detalhes">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{ asset('storage/carousels/' . $carousel->image_mobile) }}">
                                    <img class="w-full" alt="{{ $carousel->title }}" src="{{ asset('storage/carousels/' . $carousel->image_desktop) }}" title="{{ $carousel->title }}">
                                </picture>
                            </a>
                        </li>
                    @endif
                @endforeach
            @empty
                Sem imagens cadastradas...
            @endforelse
        </x-slot>
    </x-carousel>

    <div class="space-y-14 py-16">
        <x-hero-product align="right">
            <x-slot name="type">
                Linha
            </x-slot>

            <x-slot name="title">
                Confort
            </x-slot>

            <x-slot name="description">
                A linha Confort possui banco e escada ao mesmo lado da piscina, ocupando menos espaço e proporcionando muito conforto para quem usa.
            </x-slot>

            <x-slot name="button">
                <x-button-pink href="/linha/confort" class="h-10 w-64 uppercase">
                    {{ __('Medidas e Preços') }}
                </x-button-pink>
            </x-slot>

            <x-slot name="image">
                <img src="{{ asset('img/content/pools/confort.webp') }}" loading="lazy" alt="Linha Confort">
            </x-slot>
        </x-hero-product>

        <x-hero-product align="left">
            <x-slot name="type">
                Linha
            </x-slot>

            <x-slot name="title">
                Standard
            </x-slot>

            <x-slot name="description">
                A linha Standard é a queridinha dos brasileiros, pois possui todas as características de uma piscina padrão, feita com resinas de alta qualidade para garantir resistência ao solo e chuvas.
            </x-slot>

            <x-slot name="button">
                <x-button-pink href="/linha/standard" class="h-10 w-64 uppercase">
                    {{ __('Medidas e Preços') }}
                </x-button-pink>
            </x-slot>

            <x-slot name="image">
                <img src="{{ asset('img/content/pools/standard.webp') }}" loading="lazy" alt="Linha Standard">
            </x-slot>
        </x-hero-product>

        <x-hero-product align="right">
            <x-slot name="type">
                Linha
            </x-slot>

            <x-slot name="title">
                Praia
            </x-slot>

            <x-slot name="description">
                A linha Praia possui design moderno e elegante, reforços desenvolvidos para evitar marcas internas, aba anti-infiltração, evita a erosão do solo nas laterais após instalação.
            </x-slot>

            <x-slot name="button">
                <x-button-pink href="/linha/praia" class="h-10 w-64 uppercase">
                    {{ __('Medidas e Preços') }}
                </x-button-pink>
            </x-slot>

            <x-slot name="image">
                <img src="{{ asset('img/content/pools/praia.webp') }}" loading="lazy" alt="Linha Praia">
            </x-slot>
        </x-hero-product>

        <x-hero-product align="left">
            <x-slot name="type">
                Linha
            </x-slot>

            <x-slot name="title">
                Retangular
            </x-slot>

            <x-slot name="description">
                A linha Retangular garante a diversão de toda a familia e amigos, possui diversos tamanhos, reforços desenvolvidos para evitar marcas internas, aba anti-infiltração, evita a erosão do solo nas laterais após instalação.
            </x-slot>

            <x-slot name="button">
                <x-button-pink href="/linha/retangular" class="h-10 w-64 uppercase">
                    {{ __('Medidas e Preços') }}
                </x-button-pink>
            </x-slot>

            <x-slot name="image">
                <img src="{{ asset('img/content/pools/retangular.webp') }}" loading="lazy" alt="Linha Retangular">
            </x-slot>
        </x-hero-product>

        <x-hero-product align="right">
            <x-slot name="type">
                Linha
            </x-slot>

            <x-slot name="title">
                Spa
            </x-slot>

            <x-slot name="description">
                A linha Spa possui design quadrado de diversos tamanhos, fabricada com resina de alta qualidade, garantindo mais flexibilidade e resistência, possui aba anti-infiltração que evita a erosão do solo nas laterais após instalação.
            </x-slot>

            <x-slot name="button">
                <x-button-pink href="/linha/spa" class="h-10 w-64 uppercase">
                    {{ __('Medidas e Preços') }}
                </x-button-pink>
            </x-slot>

            <x-slot name="image">
                <img src="{{ asset('img/content/pools/spa.webp') }}" loading="lazy" alt="Linha Spa">
            </x-slot>
        </x-hero-product>

        <x-hero-product align="left">
            <x-slot name="type">
                Linha
            </x-slot>

            <x-slot name="title">
                Personalize
            </x-slot>

            <x-slot name="description">
                A linha Personalize possui acabamento em pastilha cerâmica em diversos tamanhos, fabricada com resina de alta qualidade, garantindo mais flexibilidade e resistência, possui aba anti-infiltração que evita a erosão do solo nas laterais após instalação.
            </x-slot>

            <x-slot name="button">
                <x-button-pink href="/linha/personalize" class="h-10 w-64 uppercase">
                    {{ __('Medidas e Preços') }}
                </x-button-pink>
            </x-slot>

            <x-slot name="image">
                <img src="{{ asset('img/content/pools/personalize.webp') }}" loading="lazy" alt="Linha Personalize">
            </x-slot>
        </x-hero-product>

    </div>

    <x-hero-colorful align="right" color="blue">
        <x-slot name="title">
            Garantia que funciona
        </x-slot>

        <x-slot name="description">
            Levamos a sério quando o assunto é garantia, utilizamos produtos de alta qualidade e seguimos todas as normas da lei. Acreditamos que um serviço bem feito deve durar muitos anos.
        </x-slot>

        <x-slot name="button">
            <x-button-pink href="{{ route('ombudsman') }}" class="h-10 w-64 uppercase">
                {{ __('Acionar garantia') }}
            </x-button-pink>
        </x-slot>

        <x-slot name="image">
            <img class="mx-auto w-3/4 lg:w-auto" loading="lazy" src="{{ asset('img/content/pages/warranty.webp') }}" alt="Garantia">
        </x-slot>
    </x-hero-colorful>

    <x-ratings>
        <x-slot name="title">
            Veja o que nossos clientes falam
        </x-slot>

        <x-slot name="description">
            Nosso segredo é a qualidade e o profissionalismo, garantindo que nossos clientes sempre estejam satisfeitos.
        </x-slot>

        <x-slot name="images">
            <x-carousel id="ratings">
                <x-slot name="images">
                    @for ($i = 1; $i <= 6; $i++)
                        <li class="glide__slide bg-black">
                            <img alt="Avaliação Sim Piscinas" src="{{ asset('img/content/ratings/' . $i . '.webp') }}">
                        </li>
                    @endfor
                </x-slot>
            </x-carousel>
        </x-slot>

        <x-slot name="button">
            <x-button-pink href="{{ route('ratings') }}" class="h-10 w-64 uppercase">
                {{ __('Ver Mais Avaliações') }}
            </x-button-pink>
        </x-slot>

    </x-ratings>

    <x-hero-colorful align="left" color="pink">
        <x-slot name="title">
            Seja um Franqueado
        </x-slot>

        <x-slot name="description">
            Se está procurando um modelo de negócio maduro e deseja ter uma equipe capacitada com as melhores técnicas do mercado, temos alto desempenho nas vendas e oferecemos produtos de qualidade. A Sim Piscinas é a melhor franquia para investir.
        </x-slot>

        <x-slot name="button">
            <x-button-blue href="{{ route('franchise') }}" class="h-10 w-64 uppercase">
                {{ __('Saber mais') }}
            </x-button-blue>
        </x-slot>

        <x-slot name="image">
            <img class="mx-auto w-3/4" src="{{ asset('img/content/pages/franchise-hero.webp') }}" loading="lazy" alt="Franquias">
        </x-slot>
    </x-hero-colorful>

    <div class="flex justify-center py-4">
        @if (Session::get('status'))
            <div class="mx-auto font-bold text-green-600">Mensagem enviada com sucesso.</div>
        @endif
    </div>
    
    <x-contacts/>

    <div class="mx-auto text-center px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-17">
        <div class="mb-2 flex flex-col sm:mb-0 sm:text-center">
            <div class="mb-7 max-w-xl space-y-4 sm:text-center md:mx-auto md:mb-12 lg:max-w-2xl">
                <h2 class="max-w-lg font-sans text-3xl font-bold uppercase leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                    Solicite um Orçamento
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    É fácil e prático, basta preencher os dados e entraremos em contato o mais breve possível!
                </p>
                <x-button-pink href="{{ route('budget') }}" class="h-10 w-64 uppercase">
                    {{ __('Solicitar Agora') }}
                </x-button-pink>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite(['resources/js/app.js', 'resources/js/glide.js'])
@endpush
