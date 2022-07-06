<?php

namespace App\Http\Controllers;

use App\Models\ImagePost;
use App\Http\Requests\StoreImagePostRequest;
use App\Http\Requests\UpdateImagePostRequest;

class ImagePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $imagepost =imagepost::create([
        //     'post_id' =>$elements->id,
        // ]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImagePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImagePostRequest $request)
    {
        $request->validate([
           
        ]);
    
        }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImagePost  $imagePost
     * @return \Illuminate\Http\Response
     */
    public function show(ImagePost $imagePost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImagePost  $imagePost
     * @return \Illuminate\Http\Response
     */
    public function edit(ImagePost $imagePost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImagePostRequest  $request
     * @param  \App\Models\ImagePost  $imagePost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImagePostRequest $request, ImagePost $imagePost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImagePost  $imagePost
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImagePost $imagePost)
    {
        //
    }
}
