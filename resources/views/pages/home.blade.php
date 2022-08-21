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
                A linha Confort possui design arredondado de diversos tamanhos, reforços desenvolvidos para evitar marcas internas, aba anti-infiltração, evita a erosão do solo nas laterais após instalação.
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
                A linha Standard é a queridinha dos brasileiros, pois possui todas as características de uma piscina padrão, feita com resinas DCPD para garantir resistência ao solo e chuvas.
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
                A linha Spa possui design quadrado de diversos tamanhos, fabricada com resinas DCPD, garantindo mais flexibilidade e resistência, possui aba anti-infiltração que evita a erosão do solo nas laterais após instalação.
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
    <x-contact-form url="/mail/budget">
        <x-slot name="title">
            Solicite um Orçamento
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
    @vite(['resources/js/app.js', 'resources/js/glide.js'])
@endpush
