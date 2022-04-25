<?php

namespace App\Http\Controllers;

use App\Models\Etiquette;
use App\Http\Requests\StoreEtiquetteRequest;
use App\Http\Requests\UpdateEtiquetteRequest;

class EtiquetteController extends Controller
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
     * @param  \App\Http\Requests\StoreEtiquetteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEtiquetteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etiquette  $etiquette
     * @return \Illuminate\Http\Response
     */
    public function show(Etiquette $etiquette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etiquette  $etiquette
     * @return \Illuminate\Http\Response
     */
    public function edit(Etiquette $etiquette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEtiquetteRequest  $request
     * @param  \App\Models\Etiquette  $etiquette
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtiquetteRequest $request, Etiquette $etiquette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etiquette  $etiquette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etiquette $etiquette)
    {
        //
    }
}
