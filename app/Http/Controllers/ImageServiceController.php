<?php

namespace App\Http\Controllers;

use App\Models\ImageService;
use App\Http\Requests\StoreImageServiceRequest;
use App\Http\Requests\UpdateImageServiceRequest;

class ImageServiceController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageService  $imageService
     * @return \Illuminate\Http\Response
     */
    public function show(ImageService $imageService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageService  $imageService
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageService $imageService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageServiceRequest  $request
     * @param  \App\Models\ImageService  $imageService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageServiceRequest $request, ImageService $imageService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageService  $imageService
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageService $imageService)
    {
        //
    }
}
