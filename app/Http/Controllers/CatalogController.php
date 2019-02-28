<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function viewCatalog()
    {

        $catalog = DB::select('select * from product');

        return view('catalog',['catalog' => $catalog]);
        // $tableauAssociatif = ["key"=>$valeur];
    }
}





