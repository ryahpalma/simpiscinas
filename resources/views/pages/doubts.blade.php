@extends('layouts.master')

@push('stylesheet')
    @vite(['resources/sass/app.scss'])
@endpush

@section('content')
    <x-subnavbar>{{ __('Dúvidas Frequentes') }}</x-subnavbar>

    <div class="mx-auto px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-20">
        <div class="mb-24 max-w-xl shadow-md sm:mx-auto lg:max-w-4xl" x-data="accordion">
            <template x-for="accordion in data" :key="accordion.id">
                <div class="accordion">
                    <button x-on:click="data = data.map(i => ({ ...i, isOpen: i.id !== accordion.id ? false : !i.isOpen}))" class="lg:text-md flex w-full items-center justify-between border border-gray-200 p-5 text-left text-sm font-medium text-gray-800 focus:ring-4 focus:ring-gray-200">
                        <h3 x-text="accordion.heading" class="max-w-3xl font-bold"></h3>
                        <span x-show="accordion.isOpen">
                            <svg class="h-6 w-6 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span x-show="!accordion.isOpen">
                            <svg class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </button>
                    <pre x-text="accordion.content" x-show="accordion.isOpen" class="whitespace-pre-line border border-gray-200 bg-gray-50 p-5 font-sans text-sm">
                    </pre>
                </div>
            </template>
        </div>
        <div class="max-w-xl text-center sm:mx-auto lg:max-w-2xl">
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
    </div>
@endsection

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('accordion', () => ({
            data: [{
                    id: '0',
                    heading: 'O que é por minha conta?',
                    content: 'A remoção da terra escavada, a remoção de obstáculos (árvores, pisos, rochas, linha de esgoto, redes de água e fossas).\n\n Água em caminhões pipa para enchimento da piscina, caso não tenha água no local.\n\nLigações da água, dreno e energia até a casa de máquinas.\n\nSerá necessário providenciar o contrapiso no entorno da piscina logo após a colocação do tanque no prazo máximo de 5 dias.',
                    isOpen: false,
                },
                {
                    id: '1',
                    heading: 'Quais são os itens e serviços inclusos na promoção?',
                    content: 'Tanque em Fiber Glass com estrutura reforçada e garantia de 15 anos.\n\nSistema de filtragem de areia.\n\nSuper LED azul, nicho de fixação, caixa de passagem com tampa inox e fonte 12v.\n\nKit de dispositivos (2 hidromassagens, 1 dispositivo de aspiração, 1 ralo de fundo com sistema anti-aprisionamento).\n\nMão de obra para escavação.\n\nMão de obra para concretagem do fundo.\n\nColocação.\n\nMão de obra de aterramento.\n\nNivelamento do tanque.\n\nTransporte até 100km.\n\nMão de obra elétrica.\n\nMão de obra hidráulica.\n',
                    isOpen: false,
                },
                {
                    id: '2',
                    heading: 'Quando começa a contar o meu prazo de instalação?',
                    content: 'O prazo de instalação começa a ser contado após a conclusão do pagamento conforme o contrato.',
                    isOpen: false,
                },
                {
                    id: '3',
                    heading: 'É possível instalar abaixo do lençol freático?',
                    content: 'Sim. É possível porém o cliente abre mão da garantia e é necessário o cliente locar bombas para drenagem de água da escavação.',
                    isOpen: false,
                },
                {
                    id: '4',
                    heading: 'Em quanto tempo minha piscina será instalada?',
                    content: 'O prazo de instalação da Sim Piscinas pode variar de acordo com sua localização e modelo de piscina escolhida, o prazo fica definido em contrato no ato da compra, nossos prazos de entrega são contabilizados em dias úteis.',
                    isOpen: false,
                },
                {
                    id: '5',
                    heading: 'A medida da piscina é calculada por dentro ou fora da borda?',
                    content: 'Todas as medidas são externas, na área total do produto.',
                    isOpen: false,
                },
                {
                    id: '6',
                    heading: 'Quando devo comprar o material básico para instalação?',
                    content: 'No momento em que o técnico entrar em contato informando o agendamento para início da obra.',
                    isOpen: false,
                },
                {
                    id: '7',
                    heading: 'A chuva pode atrapalhar o andamento da minha instalação?',
                    content: 'Sim. Inclusive consta em seu contrato uma cláusula especifica que esclarece a sua dúvida.',
                    isOpen: false,
                },
                {
                    id: '8',
                    heading: 'A pandemia de COVID-19 pode influenciar no meu prazo de instalação?',
                    content: 'Sim. No caso de fechamento do nosso setor.',
                    isOpen: false,
                },
                {
                    id: '9',
                    heading: 'Posso esvaziar a minha piscina?',
                    content: 'Não é indicado pois caso o procedimento não seja feito por um técnico autorizado Sim Piscinas a garantia da sua piscina será comprometida.',
                    isOpen: false,
                },
                {
                    id: '10',
                    heading: 'Posso encher minha piscina com água de poço, rio ou córrego?',
                    content: 'Indicamos utilizar água potável da rede ou caminhão pipa para facilitar o tratamento.',
                    isOpen: false,
                },
                {
                    id: '11',
                    heading: 'O acesso ao local da instalação precisa ser por cima do meu imóvel, preciso contratar caminhão munck ou guindaste?',
                    content: 'Isso vai depender da estrutura da cobertura do seu imóvel e das condições climáticas no dia da instalação, dificilmente utilizamos esses equipamentos mais a casos de necessidade.',
                    isOpen: false,
                },
                {
                    id: '12',
                    heading: 'Meu terreno possui vários obstáculos, piso, contra-piso e entulhos. É necessário a remoção para instalação da piscina?',
                    content: 'Sim. Inclusive o descarte destes materiais é necessário para que seja evitado quaisquer danos a sua piscina.',
                    isOpen: false,
                },

            ]
        }))
    });
</script>

@push('scripts')
    @vite(['resources/js/app.js'])
@endpush