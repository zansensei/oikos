<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $products = DB::select('select * , brand.image as brand_image from brand inner join product on brand.id = product.idbrand');
        // echo '<pre>';
        // var_dump($homeView);
        // die;
        // $product = DB::select('select * from product');
        //dd($product);

        $brandsArray = array();
        $productsArray = array();

        foreach ($products as $product) {
            $brandsArray[$product->idbrand] = [
                'title' => $product->title,
                'picture' => $product->brand_image,
                'id' => $product->id,
                'subtitle' => $product->subtitle
            ];

            $productsArray[$product->idbrand][] = [
                'id' => $product->id,
                'stock' => $product->stock,
                'price' => $product->price,
                'name' => $product->name,
                'picture' => $product->image
            ];
        }
        return view('Home', ['brandsArray' => $brandsArray, 'productsArray' => $productsArray]);
    }
}

