<?php

namespace App\Http\Controllers;

use App\Job;
use App\JobCategory;
use App\ProductCategory;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $jobs=Job::where('active',1)->get();
        $jobs_count=Job::where('active',1)->count();
        $categories = JobCategory::all();



        return view('jobs',['jobs_count'=>$jobs_count,'categories'=>$categories,'jobs'=>$jobs]);
    }
}
