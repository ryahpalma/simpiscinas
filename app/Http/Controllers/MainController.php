<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\Carousel;
use App\Models\Pool;

class MainController extends Controller
{

    public function home()
    {
        SEOTools::setTitle('Promoção De Piscinas');
        SEOTools::setDescription('Oferecemos O Que Há de Melhor no Mercado: Promoção de Piscinas, Equipamentos, Acessórios, Produtos Químicos, Serviços de Manutenção e Tratamento.');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/');
        SEOTools::setCanonical('https://www.simpiscinas.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        $carousels = Carousel::get();
        $pools = Pool::get();

        return view('pages.home', ['carousels' => $carousels, 'pools' => $pools]);
    }

    public function franchise()
    {
        SEOTools::setTitle('Seja Um Franqueado');
        SEOTools::setDescription('Seja um Franqueado Sim Piscinas Hoje Mesmo!');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/seja-um-franqueado');
        SEOTools::setCanonical('https://www.simpiscinas.com/seja-um-franqueado');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.franchise');
    }

    public function budget()
    {
        SEOTools::setTitle('Orçamento');
        SEOTools::setDescription('Realize Seu Orçamento');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/orcamento');
        SEOTools::setCanonical('https://www.simpiscinas.com/orcamento');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.budget');
    }

    public function budgetCustom($pool)
    {
        SEOTools::setTitle('Orçamento');
        SEOTools::setDescription('Realize Seu Orçamento');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/orcamento');
        SEOTools::setCanonical('https://www.simpiscinas.com/orcamento');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        $pool = Pool::whereId($pool)->get()->first();

        return view('pages.budget-custom', ['pool' => $pool]);
    }

    public function ombudsman()
    {
        SEOTools::setTitle('Ouvidoria');
        SEOTools::setDescription('Entre em contato com a ouvidoria');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/ouvidoria');
        SEOTools::setCanonical('https://www.simpiscinas.com/ouvidoria');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.ombudsman');
    }

    public function doubts()
    {
        SEOTools::setTitle('Dúvidas');
        SEOTools::setDescription('Solucione Suas Dúvidas');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/duvidas');
        SEOTools::setCanonical('https://www.simpiscinas.com/duvidas');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.doubts');
    }

    public function about()
    {
        SEOTools::setTitle('Sobre Nós');
        SEOTools::setDescription('Entenda Como Trabalhamos');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/sobre-nos');
        SEOTools::setCanonical('https://www.simpiscinas.com/sobre-nos');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.about');
    }

    public function privacy()
    {
        SEOTools::setTitle('Politicas');
        SEOTools::setDescription('Veja Nossos Termos e Políticas de Privacidade');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/politica-de-privacidade');
        SEOTools::setCanonical('https://www.simpiscinas.com/politica-de-privacidade');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.privacy');
    }

    public function ratings()
    {
        SEOTools::setTitle('Avaliações');
        SEOTools::setDescription('Veja Todas as Avaliações dos Nossos Clientes');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/avaliacoes');
        SEOTools::setCanonical('https://www.simpiscinas.com/avaliacoes');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.ratings');
    }
}
