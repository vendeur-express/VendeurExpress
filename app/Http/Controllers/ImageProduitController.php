<?php

namespace App\Http\Controllers;

use App\Models\ImageProduit;
use App\Http\Requests\StoreImageProduitRequest;
use App\Http\Requests\UpdateImageProduitRequest;

class ImageProduitController extends Controller
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
     * @param  \App\Http\Requests\StoreImageProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageProduitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageProduit  $imageProduit
     * @return \Illuminate\Http\Response
     */
    public function show(ImageProduit $imageProduit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageProduit  $imageProduit
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageProduit $imageProduit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageProduitRequest  $request
     * @param  \App\Models\ImageProduit  $imageProduit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageProduitRequest $request, ImageProduit $imageProduit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageProduit  $imageProduit
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageProduit $imageProduit)
    {
        //
    }
}
