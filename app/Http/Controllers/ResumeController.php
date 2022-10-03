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
            $resumes = Resume::orderBy('created_at', 'desc')->with(['degree', 'domain']);
            return DataTables::of($resumes)->toJson();
        }
    }
}
