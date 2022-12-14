<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $banners = Banner::with(['media'])->get();

        return view('admin.banner.index', ['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
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
            'sub_title' => ['required'],
            'description'   => ['required'],
            'banner'    =>  ['required']
        ]);

        $bannerPath = null;

        if($request->has('banner') && $request->file('banner')){
            $banner = $request->file('banner');
            $bannerName = $banner->getClientOriginalName();
            $bannerPath = $request->file('banner')->storeAs('media', $bannerName, 'public');
        }

        DB::transaction(function() use ($request, $bannerPath){

            $bannery = Banner::create([
                'title' =>  $request->title,
                'sub_title'   => $request->sub_title,
                'description'   => $request->description,
                'active'    => true
            ]);
    
            if(!is_null($bannerPath)){
                $bannery->addMedia(storage_path('app/public/'.$bannerPath))->toMediaCollection();
                $bannery->media;
            }
        }); 
        
        return redirect()->route('banners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit')->with(['banner' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => ['required'],
            'sub_title' =>  ['required'],
            'description'   =>  ['required']
        ]);

        $bannerPath = null;
        if($request->has('banner') && !is_null($request->file('banner'))) {
            $banner = $request->file('banner');
            $bannerName = $banner->getClientOriginalName();
            $bannerPath = $request->file('banner')->storeAs('media', $bannerName, 'public');
        }

        DB::transaction(function() use ($request, $bannerPath, $banner){

            $banner->title =  $request->title;
            $banner->sub_title   = $request->sub_title;
            $banner->description   = $request->description;
            $banner->save();
    
            if(!is_null($bannerPath)){
                $banner->addMedia(storage_path('app/public/'.$bannerPath))->toMediaCollection();
                $banner->media;
            }
        }); 
        
        return redirect()->route('banners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        abort(403);
    }

    public function markAs($id, $value){
        $banner = Banner::findOrFail($id);
        if($value === 'active'){
            $banner->active = true;
        }
        else {
            $banner->active = false;
        }
        $banner->save();

        return redirect()->route('banners.index');
    }
}
