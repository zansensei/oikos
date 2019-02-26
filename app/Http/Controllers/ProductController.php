<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProduct(){
        $product = array('nom' => 'Aerogarden',
                         'prix' => 189, 'image1' => asset('img/aerogarden/aerogarden-01.jpg'),'image2' => asset('img/aerogarden/aerogarden-02.jpg'),'image3' => asset('img/aerogarden/aerogarden-03.jpeg'),'image4' => asset('img/aerogarden/aerogarden-04.jpeg'),
                         'accroche' => 'AeroGarden avec kit de graine de plante',
                         'description' => 'Jardin de l’année avec le AeroGarden Mircale-Gro. Faites pousser des plantes fraiches, des légumes, des sales vertes, des fleurs et bien plus ! Le AeroGarden est un système de jardinage en intérieur sans sol qui fait pousser des plantes 5 fois plus rapidement que dans le sol.', 'video' => 'https://www.youtube.com/embed/NnUFlagDwZA',
                         'pdf' => 'https://www.aerogarden.com/media/wysiwyg/kbase/QSG_AG_Bounty-BountyElite_EU_20170929_NoCrop.pdf');
        $avisClient = array('avis' => 'Acheté l\'an passé et installé seulement depuis peu. Au bout de quelques semaines tout a poussé et de façon très dense. J\'ai même été contrainte de tailler certains plants. Agréablement surprise par ce produit!',
                            'nomClient' => 'Rebecca',
                            'date' => '16/12/18');

        return view('product',['product' => $product ,'avisClient' => $avisClient]);
    }
}
