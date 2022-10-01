<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::pluck('name', 'id')->all();
        $galleries = Gallery::with(['media'])->get();
        return view('admin.gallery.flist', [
            'categories'    =>  $categories,
            'galleries' =>  $galleries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'photos'    => ['required', 'array'],
            'category_id'    =>  ['required'],
            'name'  =>  ['required']
        ]);

        $galleryPaths = [];

        if($request->has('photos') && $request->file('photos')){
            foreach($request->file('photos') as $photo){
                $name = $photo->getClientOriginalName();
                $photoPath = $photo->storeAs('media', $name, 'public');
                array_push($galleryPaths, $photoPath);
            }
        }

        DB::transaction(function() use ($request, $galleryPaths){

            $gallery = Gallery::create([
                'name' =>  $request->name,
                'category_id'   => $request->category_id,
                'active'    =>  true
            ]);

            foreach ($galleryPaths as $key => $path) {
                $gallery->addMedia(storage_path('app/public/'.$path))->toMediaCollection();
                $gallery->media;
            }
        }); 
        
        return redirect()->route('galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
