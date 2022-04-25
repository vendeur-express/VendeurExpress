<?php

namespace App\Http\Controllers;

use App\Models\Demarcheur;
use App\Http\Requests\StoreDemarcheurRequest;
use App\Http\Requests\UpdateDemarcheurRequest;

class DemarcheurController extends Controller
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
     * @param  \App\Http\Requests\StoreDemarcheurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDemarcheurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demarcheur  $demarcheur
     * @return \Illuminate\Http\Response
     */
    public function show(Demarcheur $demarcheur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demarcheur  $demarcheur
     * @return \Illuminate\Http\Response
     */
    public function edit(Demarcheur $demarcheur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDemarcheurRequest  $request
     * @param  \App\Models\Demarcheur  $demarcheur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDemarcheurRequest $request, Demarcheur $demarcheur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demarcheur  $demarcheur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demarcheur $demarcheur)
    {
        //
    }
}
