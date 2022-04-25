<?php

namespace App\Http\Controllers;

use App\Models\Notation;
use App\Http\Requests\StoreNotationRequest;
use App\Http\Requests\UpdateNotationRequest;

class NotationController extends Controller
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
     * @param  \App\Http\Requests\StoreNotationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notation  $notation
     * @return \Illuminate\Http\Response
     */
    public function show(Notation $notation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notation  $notation
     * @return \Illuminate\Http\Response
     */
    public function edit(Notation $notation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNotationRequest  $request
     * @param  \App\Models\Notation  $notation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotationRequest $request, Notation $notation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notation  $notation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notation $notation)
    {
        //
    }
}
