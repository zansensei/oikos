<?php

namespace App\Http\Controllers;

use App\product;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProductController extends Controller

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function viewProduct(){
        $id = request()->route('id');

        $anyproduct = product::all();

        foreach ($anyproduct as $product) {
            $anyreview = $product->reviews();

            dd($anyreview);

            foreach ($anyreview as $review) {

                dd($review->review);
            }
        }

        if ($id) {
            $anyreview = Review::where('id', $id)->get();
        } else {
            $anyproduct = productController::all();
        }
        return view('product',['anyproduct' => $anyproduct , 'anyreview' => $anyreview ]);


    }

//    public function createReview() {
//        $anyreview = Review::all();
//        return view('review.create', ['anyreview' => $anyreview]);
//    }
//
//    public function store() {
//        $review = new Review();
//        $review->review = request('review');
//        $review->note = request('note');
//        $review->save();
//        $anyreview = Review::all();
//        return view('anyreview.index',  ['anyreview' => $anyreview]);
//    }
}
