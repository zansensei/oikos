<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        //connection to our BDD to take all info we need
        $products = DB::select('select * , brand.image as brand_image from brand inner join product on brand.id = product.idbrand');
        //we will create two array to add the data
        $brandsArray = array();
        $productsArray = array();
        //we will add the data for the SQL query to our array $brandsArray
        foreach ($products as $product) {
            $brandsArray[$product->idbrand] = [
                'title' => $product->title,
                'picture' => $product->brand_image,
                'id' => $product->id,
                'subtitle' => $product->subtitle
            ];
            //we will add the data for the SQL query to our array $productsArray
            $productsArray[$product->idbrand][] = [
                'id' => $product->id,
                'stock' => $product->stock,
                'price' => $product->price,
                'name' => $product->name,
                'picture' => $product->image
            ];
        }
        //we return all data to our Home view
        return view('Home', ['brandsArray' => $brandsArray, 'productsArray' => $productsArray]);
    }
}

