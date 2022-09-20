<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\Product;
use App\Models\Pool;

class ListController extends Controller
{
    public function listPools($line)
    {
        $poolDetails = Pool::where('line', $line)->get();

        SEOTools::setTitle('Linha');
        SEOTools::setDescription('Oferecemos O Que Há de Melhor no Mercado: Promoção de Piscinas, Equipamentos, Acessórios, Produtos Químicos, Serviços de Manutenção e Tratamento.');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/linhas');
        SEOTools::setCanonical('https://www.simpiscinas.com/linhas');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.list-pools', ['pools' => $poolDetails, 'line' => $line]);
    }

    public function showPool($id)
    {
        $poolDetails = Pool::where('id', $id)->get()->first();
        $poolUrl = 'https://www.simpiscinas.com/piscina/' . $poolDetails->id . '/' . str_replace([' ', '/', '.'], '-', mb_strtolower($poolDetails->title)) . '/detalhes';

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

    public function listProducts()
    {
        $productDetails = Product::get();

        SEOTools::setTitle('Produtos');
        SEOTools::setDescription('Oferecemos O Que Há de Melhor no Mercado: Promoção de Piscinas, Equipamentos, Acessórios, Produtos Químicos, Serviços de Manutenção e Tratamento.');
        SEOTools::opengraph()->setUrl('https://www.simpiscinas.com/produtos');
        SEOTools::setCanonical('https://www.simpiscinas.com/produtos');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.list-products', ['products' => $productDetails]);
    }

    public function showProduct($id)
    {
        $productDetails = Product::where('id', $id)->get()->first();
        $productUrl = 'https://www.simpiscinas.com/produto/' . $productDetails->id . '/' . str_replace([' ', '/', '.'], '-', mb_strtolower($productDetails->title)) . '/detalhes';

        SEOTools::setTitle($productDetails->title);
        SEOTools::setDescription($productDetails->description);
        SEOTools::opengraph()->setUrl($productUrl);
        SEOTools::setCanonical($productUrl);
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.simpiscinas.com/img/engine/simpiscinas-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.product', ['product' => $productDetails]);
    }
}
