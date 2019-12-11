<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
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

    public function index(Request $request)
    {
        $comments = Comment::join('products', 'comments.product_id', '=', 'products.id')->select('comments.*', 'products.name as product_name')->orderBy('created_at', 'DESC')->get();

        $product_count = Product::all()->count();
        $comment_count = Comment::all()->count();
        $category_count = Product::all()->unique('product_category_id')->count();


        return view('admin/index', ['comments' => $comments, 'product_count' => $product_count, 'comment_count' => $comment_count, 'category_count' => $category_count]);
    }


    public function comment_approve(Request $request)
    {
        $de = Comment::find($request->id);
        $de->visible = 1;
        $de->save();
        if ($de)
            return 200;
        else
            return 423;
    }

    public function comment_delete(Request $request)
    {
        $de = Comment::find($request->id);
        $de->delete();
        if ($de)
            return 200;
        else
            return 423;
    }

    public function products(Request $request)
    {

        $products = Product::all();
        $product_category = ProductCategory::all();

        return view('admin/products', ['products' => $products, 'product_category' => $product_category]);
    }


    public function products_get(Request $request)
    {
        $product = Product::find($request->id);
        return $product;

    }

    public function products_update(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->name = $request->product_name;
        $product->product_category_id = $request->product_category;
        $product->description = $request->product_description;
        $product->explanation = $request->explanation;
        $product->featured_image = $request->product_featured_image;
        $product->photos = $request->product_photos;
        $product->phone = $request->product_phone;
        $product->address = $request->product_address;
        $product->googlemaps_address = $request->product_maps_address;
        $product->save();
        if ($product)
            return 200;
        else
            return 423;
    }

    public function products_save(Request $request)
    {
        $product = Product::create([
            'name' => $request->product_name,
            'product_category_id' => $request->product_category,
            'description' => $request->product_description,
            'explanation' => $request->explanation,
            'featured_image' => $request->product_featured_image,
            'photos' => $request->product_photos,
            'phone' => $request->product_phone,
            'address' => $request->product_address,
            'googlemaps_address' => $request->product_maps_address
            ]);


        if ($product)
            return 200;
        else
            return 423;
    }
    public function products_delete(Request $request)
    {
        $product = Product::find($request->product_id);

        $product->delete();
        if ($product)
            return 200;
        else
            return 423;
    }


}
