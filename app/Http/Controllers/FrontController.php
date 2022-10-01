<?php

namespace App\Http\Controllers;

use App\Http\Resources\BannerResource;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        return view('home.landing', [
            'banners' => $banners,
            'categories'    => $categories,
            'galleries' =>  $galleries,
            'blogs' => $blogs
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
        return view('job.flist');
    }

    public function jobDetails()
    {
        return view('job.fdetail');
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->with(['media', 'category'])->get();
        return view('blog.flist', [
            'blogs' =>  $blogs
        ]);
    }

    public function blogDetails()
    {
        return view('blog.fdetail');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
}
