<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.resume.flist');
    }

    public function getResumes(Request $request)
    {
        if ($request->ajax()) {
            $resumes = Resume::orderBy('created_at', 'desc')->with(['degree', 'domain', 'media']);
            return DataTables::of($resumes)->toJson();
        }
    }

    public function show($slug)
    {
        $resume = Resume::with(['media', 'domain', 'degree', 'job'])
                ->where('slug', $slug)
                ->first();

        return view('admin.resume.details', [
            'resume'    =>  $resume
        ]);
    }

    public function searchApplicant(Request $request)
    {
        $applicant = Resume::with(['media', 'domain', 'degree', 'job'])->where('phone', 'like', '%'.request()->q.'%')->orWhere('mobile_no', 'like', '%'.request()->q.'%')->first();
        
        if(!is_null($applicant) || !empty($applicant)){
            return redirect()->route('resumes.show', $applicant->slug);
        }

        return redirect()->back();
    }
}
