<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApplicationCardResource;
use App\Models\Domain;
use App\Models\Job;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

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
        if(auth()->user()->hasRole('User')){
            return redirect()->route('user.dashboard');
        }
        
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

    public function userDashboard()
    {   
        if(auth()->user()->hasRole('User')){
            $user =  Resume::with(['media', 'domain', 'degree', 'job'])->where('email', auth()->user()->email)->first();
            return view('user.details')->with(['user' => $user]);
        }

        return Auth::logout();
    }

    public function userDashboardEdit()
    {   
        if(auth()->user()->hasRole('User')){
            $user =  Resume::with(['media', 'domain', 'degree', 'job'])->where('email', auth()->user()->email)->first();
            $domains = Domain::orderBy('name', 'asc')->pluck('name', 'id')->all();
            return view('user.edit')->with(['user' => $user, 'domains' => $domains]);
        }

        return Auth::logout();
    }

    public function userDashboardPost(Request $request, $resumeId)
    {
        $photoPath = null;
        $resumePath = null;

        $resume = Resume::findOrFail($resumeId);
        $resume->domain_id = $request->domain_id;
        $resume->save();

        foreach ($resume->media as $key => $media) {
            
            $fileType = $media->getTypeFromExtension();
            
            if($request->has('photo') && $fileType === 'image'){
                $media->delete();
                
                $m = DB::table('media')->where('name', $media->name)->first();
                Log::info($m);
                $m->delete();
                
            }
            elseif($request->has('resumecv')){
                $media->delete();
                $m = DB::table('media')->where('name', $media->name)->first();
                $m->delete();
            }
        } 

        if($request->has('photo') && $request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $photoName = Str::slug($resume->fullname.' Passport').'.'.$extension;
            $photoPath = $request->file('photo')->storeAs('media', $photoName, 'public');

            $resume->addMedia(storage_path('app/public/'.$photoPath))->toMediaCollection();
        }

        if($request->has('resumecv') && $request->file('resumecv')){
            $rextension = $request->file('resumecv')->getClientOriginalExtension();
            $resumeName = Str::slug($resume->fullname.' CV').'.'.$rextension;
            $resumePath = $request->file('resumecv')->storeAs('media', $resumeName, 'public');
        
            $resume->addMedia(storage_path('app/public/'.$resumePath))->toMediaCollection();
        }

        return redirect()->route('user.dashboard');
    }
}
