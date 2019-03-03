<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function show() {


        return view('product.createProduct');
    }

    public function create(Request $request){

        print_r($request->input());

    return view('product.createProduct');

    }
}
