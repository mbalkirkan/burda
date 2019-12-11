<?php

namespace App\Http\Controllers;

use App\Job;
use App\ProductCategory;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $jobs_count=Job::where('active',1)->count();
        $categories = ProductCategory::join('products', 'products.product_category_id', '=', 'product_categories.id')->select('product_categories.*')->get()->unique();

        return view('jobs',['jobs_count'=>$jobs_count,'categories'=>$categories]);
    }
}
