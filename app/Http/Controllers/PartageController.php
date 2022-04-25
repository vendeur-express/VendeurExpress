<?php

namespace App\Http\Controllers;

use App\Models\Partage;
use App\Http\Requests\StorePartageRequest;
use App\Http\Requests\UpdatePartageRequest;

class PartageController extends Controller
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
     * @param  \App\Http\Requests\StorePartageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partage  $partage
     * @return \Illuminate\Http\Response
     */
    public function show(Partage $partage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partage  $partage
     * @return \Illuminate\Http\Response
     */
    public function edit(Partage $partage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartageRequest  $request
     * @param  \App\Models\Partage  $partage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartageRequest $request, Partage $partage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partage  $partage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partage $partage)
    {
        //
    }
}
