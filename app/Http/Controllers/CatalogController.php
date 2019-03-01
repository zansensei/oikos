<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function viewCatalog()
    {

        $catalog = DB::select('select * from product' );

        return view('catalog', ["catalog" => $catalog]);
    }
}


//$address=Address::all();
//dd($address);

//return view('address', ["address" => $address]);


