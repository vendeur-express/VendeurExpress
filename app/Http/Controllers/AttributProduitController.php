<?php

namespace App\Http\Controllers;

use App\Models\AttributProduit;
use App\Http\Requests\StoreAttributProduitRequest;
use App\Http\Requests\UpdateAttributProduitRequest;

class AttributProduitController extends Controller
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
     * @param  \App\Http\Requests\StoreAttributProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttributProduitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttributProduit  $attributProduit
     * @return \Illuminate\Http\Response
     */
    public function show(AttributProduit $attributProduit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttributProduit  $attributProduit
     * @return \Illuminate\Http\Response
     */
    public function edit(AttributProduit $attributProduit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttributProduitRequest  $request
     * @param  \App\Models\AttributProduit  $attributProduit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttributProduitRequest $request, AttributProduit $attributProduit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttributProduit  $attributProduit
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttributProduit $attributProduit)
    {
        //
    }
}
