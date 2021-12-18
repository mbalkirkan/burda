<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Comment;
use App\Gallery;
use App\Item;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        //
    }
    public function about(Request $request)
    {
        $categories = ProductCategory::join('products', 'products.product_category_id', '=', 'product_categories.id')->select('product_categories.*')->get()->unique();

        return view('about',['categories' => $categories]);
    }
    public function privacy(Request $request)
    {
        $categories = ProductCategory::join('products', 'products.product_category_id', '=', 'product_categories.id')->select('product_categories.*')->get()->unique();

        return view('privacy',['categories' => $categories]);
    }
    public function terms(Request $request)
    {
        $categories = ProductCategory::join('products', 'products.product_category_id', '=', 'product_categories.id')->select('product_categories.*')->get()->unique();

        return view('terms',['categories' => $categories]);
    }
    public function index(Request $request)
    {
        $new_products = Product::limit(10)
            ->join('product_categories', 'products.product_category_id', '=', 'product_categories.id')
            ->select('products.*', 'product_categories.name as product_categories_name', 'product_categories.slug as product_categories_slug')
            ->orderBy('products.created_at', 'DESC')
            ->get();


        $categories = ProductCategory::join('products', 'products.product_category_id', '=', 'product_categories.id')->select('product_categories.*')->get()->unique();

       // $categories = ProductCategory::all();


        $cafe_restoran = Product::limit(10)->where('product_category_id', 1)
            ->join('product_categories', 'products.product_category_id', '=', 'product_categories.id')
            ->select('products.*', 'product_categories.name as product_categories_name', 'product_categories.slug as product_categories_slug')
            ->get();

        $gallery = Gallery::all();

        $campaigns = Campaign::all();



        return view('index', ['new_products' => $new_products, 'categories' => $categories, 'cafe_restoran' => $cafe_restoran, 'gallery' => $gallery, 'campaigns' => $campaigns]);
    }
    public function eczane(Request $request)
    {
        $categories = ProductCategory::join('products', 'products.product_category_id', '=', 'product_categories.id')->select('product_categories.*')->get()->unique();


        require __DIR__.'/Eczane/eczane.class.php';

        $nobetci=  \NobetciEczane::Find('usak');
        return view('eczane',['nobetci'=>$nobetci, 'categories' => $categories]);
    }



    public function category(Request $request)
    {


        $products = Product::
        join('product_categories', 'products.product_category_id', '=', 'product_categories.id')
            ->where('product_categories.slug', $request->category)
            ->select('products.*', 'product_categories.name as product_categories_name', 'product_categories.photo as product_categories_photo', 'product_categories.slug as product_categories_slug')
            ->orderBy('products.created_at', 'DESC')
            ->get();

        if (count($products) == 0) {
            return 404;
        }

        $category_name = $products[0]->product_categories_name;
        $category_photo = $products[0]->product_categories_photo;


        $categories = ProductCategory::join('products', 'products.product_category_id', '=', 'product_categories.id')->select('product_categories.*')->get()->unique();

        return view('category_products', ['products' => $products, 'category_name' => $category_name, 'categories' => $categories, 'category_photo' => $category_photo]);

//        $categories=ProductCategory::all();
//
//        $cafe_restoran=Product::where('product_category_id',1)->get();
//
//        $gallery=Gallery::all();
//
//        $campaigns=Campaign::all();
//
//
//        return view('index',['new_products'=>$new_products,'categories'=>$categories,'cafe_restoran'=>$cafe_restoran,'gallery'=>$gallery,'campaigns'=>$campaigns]);
    }

    public function product(Request $request)
    {

        $product = Product::where('products.slug', $request->product)
            ->join('product_categories', 'products.product_category_id', '=', 'product_categories.id')
            ->select('products.*', 'product_categories.name as product_categories_name', 'product_categories.photo as product_categories_photo', 'product_categories.slug as product_categories_slug')
            ->orderBy('products.created_at', 'DESC')
            ->first();

        $product_items = Item::where('items.product_id', $product->id)
            ->join('item_categories', 'items.category_id', '=', 'item_categories.id')
            ->orderBy('items.product_id', 'ASC')
            ->select('items.*', 'item_categories.name as item_category_name')
            ->get();

        $category_name = $product->product_categories_name;
        $categories = ProductCategory::join('products', 'products.product_category_id', '=', 'product_categories.id')->select('product_categories.*')->get()->unique();


        $product_comments=Comment::where('product_id', $product->id)->where('visible',1)->get();

        return view('product', ['product' => $product,'product_comments'=>$product_comments, 'product_items' => $product_items, 'categories' => $categories, 'category_name' => $category_name]);
    }


    public function coronavirus(Request $request)
    {
        $categories = ProductCategory::join('products', 'products.product_category_id', '=', 'product_categories.id')->select('product_categories.*')->get()->unique();

        return view('corona',['categories' => $categories]);
    }


    public function product_comment_add(Request $request)
    {
       $de= Comment::create([
            'name'=>$request->name,
            'comment'=>$request->review,
            'rating'=>$request->backing5,
           'product_id'=>$request->product_id,
        ]);
       if($de)
       {return 200;}
       else{return 422;}
    }
}
