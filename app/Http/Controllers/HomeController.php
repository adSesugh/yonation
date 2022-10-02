<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApplicationCardResource;
use App\Models\Job;
use App\Models\Resume;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = Job::orderBy('created_at', 'desc')->latest()->limit(5)->with(['domain'])->get();
        $recentResumes = Resume::orderBy('created_at', 'desc')->with(['domain'])->latest()->limit(5)->get();
       
        return view('admin.dashboard', [
            'jobs'  => $jobs,
            'resumeCount' => Resume::count(),
            'resumeProcessed' => Resume::isProcessed()->count(),
            'resumePending' => Resume::isPending()->count(),
            'jobCount'  =>  Job::count(),
            'recentResumes' =>  $recentResumes
        ]);
    }
}
