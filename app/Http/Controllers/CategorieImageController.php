<?php

namespace App\Http\Controllers;

use App\Models\CategorieImage;
use App\Http\Requests\StoreCategorieImageRequest;
use App\Http\Requests\UpdateCategorieImageRequest;

class CategorieImageController extends Controller
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
     * @param  \App\Http\Requests\StoreCategorieImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieImage  $categorieImage
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieImage $categorieImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieImage  $categorieImage
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieImage $categorieImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieImageRequest  $request
     * @param  \App\Models\CategorieImage  $categorieImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorieImageRequest $request, CategorieImage $categorieImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieImage  $categorieImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieImage $categorieImage)
    {
        //
    }
}
