<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Job;

class HomeController extends Controller
{
    public function index(Category $categories, Job $jobs)
    {
        $categories = $categories->limit(12)->latest()->get(['title', 'slug']);
        $jobs = $jobs->latest()->paginate();
        return view('jobs.home', compact('categories', 'jobs'));
    }
}
