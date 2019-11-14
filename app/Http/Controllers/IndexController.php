<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Gallery;
use App\Product;
use App\ProductCategory;
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
            ->orderBy('products.created_at', 'DESC')
            ->get();

        $categories=ProductCategory::all();

        $cafe_restoran=Product::where('product_category_id',2)->get();

        $gallery=Gallery::all();

        $campaigns=Campaign::all();


      return view('index',['new_products'=>$new_products,'categories'=>$categories,'cafe_restoran'=>$cafe_restoran,'gallery'=>$gallery,'campaigns'=>$campaigns]);
    }


    public function category(Request $request)
    {


        $products=Product::
            join('product_categories','products.product_category_id','=','product_categories.id')
            ->where('product_categories.slug',$request->category)
            ->select('products.*','product_categories.name as product_categories_name' )
            ->orderBy('products.created_at', 'DESC')
            ->get();

        $category_name=$products[0]->product_categories_name;

        $categories=ProductCategory::all();

        return view('category_products',['products'=> $products,'category_name'=>$category_name,'categories'=>$categories]);

        $categories=ProductCategory::all();

        $cafe_restoran=Product::where('product_category_id',1)->get();

        $gallery=Gallery::all();

        $campaigns=Campaign::all();


        return view('index',['new_products'=>$new_products,'categories'=>$categories,'cafe_restoran'=>$cafe_restoran,'gallery'=>$gallery,'campaigns'=>$campaigns]);
    }
}
