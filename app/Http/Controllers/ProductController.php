<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\Pool;

class ProductController extends Controller
{
    public function listPools($line)
    {
        $poolDetails = Pool::where('line', $line)->get();

        SEOTools::setTitle('Linha');
        SEOTools::setDescription('Oferecemos O Que Há de Melhor no Mercado: Promoção de Piscinas, Equipamentos, Acessórios, Produtos Químicos, Serviços de Manutenção e Tratamento.');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/');
        SEOTools::setCanonical('https://www.simpiscinas.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.list-pools', ['pools' => $poolDetails, 'line' => $line]);
    }

    public function showPool($id)
    {
        $poolDetails = Pool::where('id', $id)->get()->first();
        $poolUrl = 'https://www.simpiscinas.com/' . $poolDetails->id . '/' . str_replace([' ', '/', '.'], '-', mb_strtolower($poolDetails->title)) . '/detalhes';

        SEOTools::setTitle($poolDetails->title);
        SEOTools::setDescription($poolDetails->description);
        SEOTools::opengraph()->setUrl($poolUrl);
        SEOTools::setCanonical($poolUrl);
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.pool', ['pool' => $poolDetails]);
    }
}
