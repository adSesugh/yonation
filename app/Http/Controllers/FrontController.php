<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest');
    }

    public function index()
    {
        $banners = Banner::with(['media'])->inRandomOrder()->limit(3)->get(['title', 'sub_title', 'description']);

        return view('home.landing', ['banners' => $banners]);
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
        return view('blog.flist');
    }

    public function blogDetails()
    {
        return view('blog.fdetail');
    }
}
