<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(Request $request)
    {
        $new_products=Product::limit(10)
            ->join('product_categories','products.product_category_id','=','product_categories.id')
            ->select('products.*','product_categories.name as product_categories_name' )
            ->get();

      return view('index',['new_products'=>$new_products]);
    }
}
