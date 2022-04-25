<?php

namespace App\Http\Controllers;

use App\Models\Jaime;
use App\Http\Requests\StoreJaimeRequest;
use App\Http\Requests\UpdateJaimeRequest;

class JaimeController extends Controller
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
     * @param  \App\Http\Requests\StoreJaimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJaimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jaime  $jaime
     * @return \Illuminate\Http\Response
     */
    public function show(Jaime $jaime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jaime  $jaime
     * @return \Illuminate\Http\Response
     */
    public function edit(Jaime $jaime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJaimeRequest  $request
     * @param  \App\Models\Jaime  $jaime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJaimeRequest $request, Jaime $jaime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jaime  $jaime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jaime $jaime)
    {
        //
    }
}
