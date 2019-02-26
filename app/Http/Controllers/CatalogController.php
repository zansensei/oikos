<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function viewCatalog()
    {

        $product = array(
            array('id'=>9, 'nom' => 'Aerogarden', 'prix' => 189, 'image' => asset('img/aerogarden/aerogarden-01.jpg'), 'accroche' => 'AeroGarden avec kit de graine de plante', 'description' => 'Jardin de l’année avec le AeroGarden Mircale-Gro. Faites pousser des plantes fraiches, des légumes, des sales vertes, des fleurs et bien plus ! Le AeroGarden est un système de jardinage en intérieur sans sol qui fait pousser des plantes 5 fois plus rapidement que dans le sol.'),
            array('id'=>2, 'nom' => 'Altered', 'prix' => 39, 'image' => asset('img/altered/altered-01.jpg'), 'accroche' => 'Réduire sa consomation d\'eau', 'description' => 'Altered permet d’économiser de l’énergie et des ressources afin que vous n’ayez pas à le faire. Optimiser votre consommation d\'énergie et d\'eau automatiquement..'),
            array('id'=>4, 'nom' => 'Bob', 'prix' => 150, 'image' => asset('img/bob/bob2.jpg'), 'accroche' => 'Le premier lave-vaisselle autonome et ultra-compact', 'description' => 'Laissez-vous surprendre par le lave-vaisselle le plus avancé au monde. Avec son réservoir intégré, Bob est le premier lave-vaisselle autonome et ultra-compact . Il ne consomme que 0.35kWh par cycle et n’utilise que 3 litres d’eau par cycle, soit 5 fois moins qu’un lavage à la main.'),
            array('id'=>3, 'nom' => 'Nebia', 'prix' => 1149, 'image' => asset('img/nebia/nebia-black-01.jpg'), 'accroche' => 'Douche durable', 'description' => 'La prochaine évolution de la douche: plus de chaleur, plus de puissance, plus de couverture. Permet d\'économiser jusqu\'à  65% d\'eau grâce à son système révolutionnaire.'),
            array('id'=>5, 'nom' => 'Nest', 'prix' => 210, 'image' => asset('img/nest/NEST.png'), 'accroche' => 'Régulateur énergetique', 'description' => 'Élégant, il vous fournit une température agréable et vous aide à faire des économies d\'énergie et contrôle la production d\'eau chaude. Ce thermostat contrôle 60 % de vos factures énergétiques, ce qui en plus d\'être écologique devrait vous aider à réaliser des économies !'),
            array('id'=>6, 'nom' => 'Qrad', 'prix' => 329, 'image' => asset('img/qrad/qrad-03.jpg'), 'accroche' => 'Radiateur numérique', 'description' => ' le QH-1, le premier radiateur-ordinateur dont la chaleur provient de micro-processeurs embarqués, connectés à internet, qui réalisent à distance des calculs informatiques pour des entreprises tierces. La solution Qarnot réduit considérablement l’empreinte carbone des cacluls informatiques.'),
            array('id'=>7, 'nom' => 'Solargaps', 'prix' => 179, 'image' => asset('img/solargaps/solargap-01.jpg'), 'accroche' => 'Stores à énergie solaire', 'description' => 'Ces stores intelligents suivent automatiquement le soleil et sont facilement contrôlablent grâce à votre smartphone, Google Home et Amazon Alexa.'),
            array('id'=>8, 'nom' => 'towergarden', 'prix' => 250, 'image' => asset('img/towergarden/towergarden-01.jpg'), 'accroche' => 'Jardin d\'interieur', 'description' => 'Tours aéroponiques permettants de faire pousser des fruits, des légumes, des herbes fines, ou des fleurs en utilisant 95 % moins d’eau par rapport aux cultures en terre.'),
            array('id'=>1, 'nom' => 'zera', 'prix' => 200, 'image' => asset('img/zera/zera-01.jpg'), 'accroche' => 'Poubelle composte', 'description' => 'Composter depuis sa cuisine, c\'est désormais possible ! Cet objet cache un ingénieux système capable d\'accélérer le processus de façon spectaculaire. Zera élimine les déchets en seulement 24h et de manière écologique'),
        );


        return view('catalog', ["product" => $product]);
        // $tableauAssociatif = ["key"=>$valeur];
    }
}





