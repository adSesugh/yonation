<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Job;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest');
    }

    public function index()
    {
        $banners = Banner::with(['media'])->isActive()->inRandomOrder()->limit(3)->get();
        $blogs = Blog::with(['media', 'category'])->isActive()->inRandomOrder()->limit(3)->get();
        $categories = Category::get(['name']);
        $galleries = Gallery::with(['media', 'category'])->get();
        $jobs = Job::orderBy('created_at', 'desc')->limit(6)->inRandomOrder()->with(['domain'])->get();
        return view('home.landing', [
            'banners' => $banners,
            'categories'    => $categories,
            'galleries' =>  $galleries,
            'blogs' => $blogs,
            'jobs'  => $jobs
        ]);
    }

    public function about()
    {
        return view('about.findex');
    }

    public function gallery()
    {
        return view('gallery.findex');
    }

    public function jobs()
    {
        $jobs = Job::orderBy('created_at', 'desc')->with(['domain'])->get();
        $blogs = Blog::orderBy('created_at', 'desc')->with(['media', 'category'])->get();
        
        return view('job.flist', [
            'jobs' =>  $jobs,
            'blogs' =>  $blogs
        ]);
    }

    public function jobDetails($slug)
    {
        $detail = Job::where('slug', $slug)->first();
        $relatedJobs = Job::where('domain_id', $detail->domain_id)->isActive()->get();
        $blogs = Blog::latest()->limit(5)->inRandomOrder()->get();
        return view('job.fdetail', [
            'detail'    =>  $detail,
            'relatedJobs'   =>  $relatedJobs,
            'blogs' =>  $blogs
        ]);
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->with(['media', 'category'])->get();
        return view('blog.flist', [
            'blogs' =>  $blogs
        ]);
    }

    public function blogDetails($slug)
    {
        $jobs = Job::latest()->limit(5)->isActive()->get();
        $detail = Blog::where('slug', $slug)->first();
        $relatedBlogs = Blog::where('category_id', $detail->category_id)->isActive()->get();
        return view('blog.fdetail', [
            'detail'    =>  $detail,
            'relatedBlogs'   =>  $relatedBlogs,
            'jobs' =>  $jobs
        ]);
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
}
