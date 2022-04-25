<?php

namespace App\Http\Controllers;

use App\Models\Droit;
use App\Http\Requests\StoreDroitRequest;
use App\Http\Requests\UpdateDroitRequest;

class DroitController extends Controller
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
     * @param  \App\Http\Requests\StoreDroitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDroitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Droit  $droit
     * @return \Illuminate\Http\Response
     */
    public function show(Droit $droit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Droit  $droit
     * @return \Illuminate\Http\Response
     */
    public function edit(Droit $droit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDroitRequest  $request
     * @param  \App\Models\Droit  $droit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDroitRequest $request, Droit $droit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Droit  $droit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Droit $droit)
    {
        //
    }
}
