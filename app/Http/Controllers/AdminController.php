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

        $products=Product::all();
        $product_category=ProductCategory::all();

       return view('admin/products',['products'=>$products,'product_category'=>$product_category]);
    }
}
