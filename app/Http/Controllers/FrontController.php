<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateResumeRequest;
use App\Http\Requests\PostMessageRequest;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Degree;
use App\Models\Domain;
use App\Models\Gallery;
use App\Models\Job;
use App\Models\Message;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use BayAreaWebPro\MultiStepForms\MultiStepForm;

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
        $galleries = Gallery::with(['media', 'category'])->isActive()->inRandomOrder()->limit(6)->get();
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
        $galleries = Gallery::isActive()->get();
        $categories = Category::get(['name']);
        return view('gallery.findex', [
            'galleries' =>  $galleries,
            'categories'    =>  $categories
        ]);
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
        $blogs = Blog::orderBy('created_at', 'desc')->with(['media', 'category'])->isActive()->get();
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

    public function jobApply()
    {
        $degrees = Degree::pluck('name', 'id')->all();
        $domains = Domain::pluck('name', 'id')->all();
        $genders = [
            'Male' => 'Male',
            'Female' =>  'Female'
        ];

        $form = MultiStepForm::make('job.apply', [
            'degrees'   =>  $degrees,
            'domains'   =>  $domains,
            'genders'   =>  $genders
        ]);
        $form->namespaced('onboarding');
        $form->canNavigateBack(true);
        $form->addStep(1, [
            'rules' => ['name' => 'required'],
            'messages' => ['name.required' => 'Your name is required silly.'],
        ]);
    
        // Validate Step 2
        $form->addStep(2, [
            'rules' => ['role' => 'required|string'],
        ]);
    
        // Add non-validated step...
        $form->addStep(3,[
           'data' => ['message' => "Great Job, Your Done!"]
        ]);

        // After step validation...
        $form->onStep(3, function (MultiStepForm $form) {
           logger('onStep3', $form->toArray());
           
           if($form->request->get('submit') === 'reset'){
                $form->reset();
           }else{
               return response('OK');
           }
        });
       
        // Modify data before saved to session after each step.
        $form->beforeSave(function(array $data) {
        
            // Transform non-serializable objects to paths, array data etc...
            return $data;
        });

        return $form;
        // return view('job.apply', [
        //     'degrees'   =>  $degrees,
        //     'domains'   =>  $domains,
        //     'genders'   => $genders
        // ]);
    }

    public function jobApplyStore(CreateResumeRequest $request)
    {
        $request->validate([
            'fullname'  => ['required']
        ]);

        $photoPath = null;
        $resumePath = null;

        if($request->has('photo') && $request->file('photo')){
            //$photo = $request->file('photo');
            $photoName = Str::slug($request->fullname.' Passport'); //$photo->getClientOriginalName();
            $photoPath = $request->file('photo')->storeAs('media', $photoName, 'public');
        }

        if($request->has('resumecv') && $request->file('resumecv')){
            //$resume = $request->file('resumecv');
            $resumeName = Str::slug($request->fullname.' CV'); // $resume->getClientOriginalName();
            $resumePath = $request->file('resumecv')->storeAs('media', $resumeName, 'public');
        }

        DB::transaction(function() use ($request, $photoPath, $resumePath) {
            $resumey = Resume::create([
                'fullname'  =>  $request->fullname,
                'email' =>  $request->email,
                'phone' =>  $request->phone,
                'mobile_no' =>  $request->mobile_no,
                'gender'    =>  $request->gender,
                'birthdate' =>  Carbon::parse($request->birthdate)->format('Y-m-d'),
                'domain_id'    =>  $request->domain_id,
                'school_name'   =>  $request->school_name,
                'year_from' =>  $request->year_from,
                'year_to'   =>  $request->year_to,
                'course'    =>  $request->course,
                'degree_id' =>  $request->degree_id
            ]);
    
            if(!is_null($photoPath) || !is_null($resumePath)){
                $resumey->addMedia(storage_path('app/public/'.$photoPath))->toMediaCollection();
                $resumey->addMedia(storage_path('app/public/'.$resumePath))->toMediaCollection();
                //$resumey->media;
            }
        });
        
        return redirect()->route('job.apply')->withSuccess('Thank you for submitting your details...');
    }

    public function postMessage(PostMessageRequest $request)
    {
        try {
            Message::create([
                'name'  =>  $request->name,
                'email' =>  $request->email,
                'subject'   => $request->subject,
                'number'    =>  $request->number,
                'note'      => $request->note
            ]);

            return redirect()->route('index');

        } catch (\Throwable $th) {
            Log::info($th);
        }
    }
}
