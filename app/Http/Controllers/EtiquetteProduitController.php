<?php

namespace App\Http\Controllers;

use App\Models\EtiquetteProduit;
use App\Http\Requests\StoreEtiquetteProduitRequest;
use App\Http\Requests\UpdateEtiquetteProduitRequest;

class EtiquetteProduitController extends Controller
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
     * @param  \App\Http\Requests\StoreEtiquetteProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEtiquetteProduitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EtiquetteProduit  $etiquetteProduit
     * @return \Illuminate\Http\Response
     */
    public function show(EtiquetteProduit $etiquetteProduit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EtiquetteProduit  $etiquetteProduit
     * @return \Illuminate\Http\Response
     */
    public function edit(EtiquetteProduit $etiquetteProduit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEtiquetteProduitRequest  $request
     * @param  \App\Models\EtiquetteProduit  $etiquetteProduit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtiquetteProduitRequest $request, EtiquetteProduit $etiquetteProduit)
    {
        //wqw
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EtiquetteProduit  $etiquetteProduit
     * @return \Illuminate\Http\Response
     */
    public function destroy(EtiquetteProduit $etiquetteProduit)
    {
        //
    }
}
