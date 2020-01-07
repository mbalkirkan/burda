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
        $jobs=Job::where('active',1)->join('job_categories', 'jobs.category_id', '=', 'job_categories.id')->select('jobs.*', 'job_categories.name as category')->orderBy('created_at', 'DESC')->get();;
        $jobs_count=Job::where('active',1)->where('type_id',1)->count();
        $jobs_count2=Job::where('active',1)->where('type_id',2)->count();
        $categories = JobCategory::all();



        return view('jobs',['jobs_count'=>$jobs_count,'jobs_count2'=>$jobs_count2,'categories'=>$categories,'jobs'=>$jobs]);
    }
    public function add(Request $request)
    {
        if($request->product_name)
        {
            $de=    Job::create([
                'product_name'=>$request->product_name,
                'detail'=>$request->detail,
                'contact_number'=>$request->phone,
                'gender'=>$request->gender,
                'category_id'=>$request->category_id,
                'operation_type'=>$request->operation_type,
                'type_id'=>$request->type_id,
                'address'=>$request->address,
            ]);
            if($de)
                return 200;
            else
                return 433;
        }
        else{
        $de= Job::create([
                'name'=>$request->name,
                'detail'=>$request->detail,
                'contact_number'=>$request->phone,
                'gender'=>$request->gender,
                'category_id'=>$request->category_id,
                'operation_type'=>$request->operation_type,
                'type_id'=>$request->type_id,
                'address'=>$request->address,
            ]);
            if($de)
                return 200;
            else
                return 433;
        }


    }
}
