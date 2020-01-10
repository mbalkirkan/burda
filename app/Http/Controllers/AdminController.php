<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Item;
use App\ItemCategory;
use App\Job;
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

        $jobs = Job::join('job_categories', 'jobs.category_id', '=', 'job_categories.id')->select('jobs.*', 'job_categories.name as category')->orderBy('created_at', 'DESC')->get();

        return view('admin/index', ['jobs' => $jobs, 'comments' => $comments, 'product_count' => $product_count, 'comment_count' => $comment_count, 'category_count' => $category_count]);
    }


    public function job_approve(Request $request)
    {
        $de = Job::find($request->id);
        $de->active = 1;
        $de->save();
        if ($de)
            return 200;
        else
            return 423;
    }

    public function job_delete(Request $request)
    {
        $de = Job::find($request->id);
        $de->delete();
        if ($de)
            return 200;
        else
            return 423;
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


    public function menu(Request $request)
    {
        $products = Product::all();
        $product_category = ProductCategory::all();

        $item_categories = ItemCategory::all();
        return view('admin/menus', ['item_categories' => $item_categories, 'products' => $products, 'product_category' => $product_category]);
    }

    public function menu_getcategory(Request $request)
    {

        $item = Item::where('product_id', $request->product_id)->where('category_id', $request->id)->get();
        return $item;
    }

    public function menu_addcategory(Request $request)
    {

        $de = ItemCategory::create([
            'name' => $request->name
        ]);
        if ($de) {
            return 200;
        } else {
            return 422;
        }
    }

    public function menu_getitem(Request $request)
    {

        $item = Item::find($request->id);
        return $item;
    }

    public function menu_additem(Request $request)
    {

        $de = Item::create([
            'name' => $request->name,
            'description' => $request->description,
            'featured_image' => $request->featured_image,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'product_id' => $request->product_id,
        ]);
        if ($de) {
            return 200;
        } else {
            return 422;
        }
    }

    public function menu_updateitem(Request $request)
    {
        $de = Item::find($request->id);

        $de->name = $request->name;
        $de->description = $request->description;
        $de->featured_image = $request->featured_image;
        $de->price = $request->price;

        $de->save();
        if ($de) {
            return 200;
        } else {
            return 422;
        }
    }
    public function menu_deleteitem(Request $request)
    {
        $de = Item::find($request->id);
        $de->delete();

        if ($de) {
            return 200;
        } else {
            return 422;
        }
    }


}
