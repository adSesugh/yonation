<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->with(['media', 'category'])->get();
        return view('admin.blog.flist', [
            'blogs' =>  $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id')->all();
        return view('admin.blog.create', [
            'categories'    =>  $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'category_id' => ['required'],
            'description'   => ['required']
        ]);

        $photoPath = null;

        if($request->has('photo') && $request->file('photo')){
            $photo = $request->file('photo');
            $photoName = $photo->getClientOriginalName();
            $photoPath = $request->file('photo')->storeAs('media', $photoName, 'public');
        }

        DB::transaction(function() use ($request, $photoPath){

            $blog = Blog::create([
                'title' =>  $request->title,
                'category_id'   => $request->category_id,
                'description'   => $request->description,
                'active'    => true
            ]);
    
            if(!is_null($photoPath)){
                $blog->addMedia(storage_path('app/public/'.$photoPath))->toMediaCollection();
                $blog->media;
            }
        }); 
        
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
