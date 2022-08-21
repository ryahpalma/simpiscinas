@extends('layouts.master')

@push('stylesheet')
    @vite(['resources/sass/app.scss'])
@endpush

@section('content')
    <x-subnavbar>{{ __('Política de Privacidade') }}</x-subnavbar>

    <section>
        <div class="relative mx-auto mb-12 w-full max-w-4xl items-center py-12 px-8 xl:px-2">
            <div class="text-md space-y-3 text-gray-700">
                <h2 class="my-5 text-2xl text-gray-800">
                    Nossas Políticas de Privacidade
                </h2>
                <p>
                    Todas as suas informações pessoais recolhidas, serão usadas para o
                    ajudar a tornar a sua visita no nosso site o mais produtiva e
                    agradável possível.
                </p>
                <p>
                    Todas as informações pessoais relativas a membros, assinantes,
                    clientes ou visitantes que usem a Sim Piscinas serão tratadas em
                    concordância com a Lei da Proteção de Dados Pessoais de 26 de
                    outubro de 1998 (Lei n.º 67/98).
                </p>
                <p>
                    A informação pessoal recolhida pode incluir o seu nome, e-mail,
                    número de telefone e/ou telemóvel, morada, data de nascimento e/ou
                    outros.
                </p>
                <p>
                    A equipe da Sim Piscinas reserva-se ao direito de alterar este
                    acordo sem aviso prévio. Deste modo, recomendamos que consulte a
                    nossa política de privacidade com regularidade de forma a estar
                    sempre atualizado.
                </p>
                <h2 class="my-5 text-2xl text-gray-800">
                    Os Anúncios
                </h2>
                <p>
                    Tal como outros websites, coletamos e utilizamos informação contida
                    nos anúncios. A informação contida nos anúncios, inclui o seu
                    endereço IP (Internet Protocol), o seu ISP (Internet Service
                    Provider, o navegador que utilizou ao visitar o nosso website (como
                    o Google Chrome ou o Firefox), o tempo da sua visita e que páginas
                    visitou dentro do nosso website.
                </p>
                <h2 class="my-5 text-2xl text-gray-800">
                    Os Cookies e Web Beacons
                </h2>
                <p>
                    Utilizamos cookies para armazenar informação, tais como as suas
                    preferências pessoas quando visita o nosso website. Isto poderá
                    incluir um simples popup, ou uma ligação em vários serviços que
                    providenciamos, tais como fóruns.
                </p>
                <p>
                    Você detém o poder de desligar os seus cookies, nas opções do seu
                    browser, ou efetuando alterações nas ferramentas de programas
                    Anti-Virus, como o Norton Internet Security. No entanto, isso poderá
                    alterar a forma como interage com o nosso website, ou outros
                    websites. Isso poderá afetar ou não permitir que faça logins em
                    programas, sites ou fóruns da nossa e de outras redes.
                </p>
                <h2 class="my-5 text-2xl text-gray-800">
                    Ligações a Sites de Terceiros
                </h2>
                <p>
                    A Sim Piscinas possui ligações para outros sites, os quais, a nosso
                    ver, podem conter informações/ferramentas úteis para os nossos
                    visitantes. A nossa política de privacidade não é aplicada a sites
                    de terceiros, pelo que, caso visite outro site a partir do nosso
                    deverá ler a politica de privacidade do mesmo.
                </p>
                <p>
                    Não nos responsabilizamos pela política de privacidade ou conteúdo
                    presente nesses mesmos sites.
                </p>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    @vite(['resources/js/app.js'])
@endpush