<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Job;

class JobsController extends Controller
{
    public function show($slug , $id )
    {
        $job = Job::where('id', $id)->where('title',$slug)->firstOrFail();
        return view('jobs.show', compact('job'));
    }
}
