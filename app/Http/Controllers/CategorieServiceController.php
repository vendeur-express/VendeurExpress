<?php

namespace App\Http\Controllers;

use App\Models\CategorieService;
use App\Http\Requests\StoreCategorieServiceRequest;
use App\Http\Requests\UpdateCategorieServiceRequest;

class CategorieServiceController extends Controller
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
     * @param  \App\Http\Requests\StoreCategorieServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieService  $categorieService
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieService $categorieService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieService  $categorieService
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieService $categorieService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieServiceRequest  $request
     * @param  \App\Models\CategorieService  $categorieService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorieServiceRequest $request, CategorieService $categorieService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieService  $categorieService
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieService $categorieService)
    {
        //
    }
}
