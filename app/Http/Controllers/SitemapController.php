<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sitemap(){
        $product = Product::join('product_categories', 'products.product_category_id', '=', 'product_categories.id')->orderBy('updated_at', 'DESC')
            ->select('products.*','product_categories.slug as category_slug')
            ->get();

        $product_category = ProductCategory::join('products', 'products.product_category_id', '=', 'product_categories.id')->select('product_categories.*')->orderBy('products.updated_at', 'DESC')->get()->unique();

        $now = Carbon::now()->toAtomString();
        $content = view('sitemap', compact('product','now','product_category'));
        return response($content)->header('Content-Type', 'application/xml');
    }
}
