<?php

namespace App\Http\Controllers;

use App\Models\MarqueProduit;
use App\Http\Requests\StoreMarqueProduitRequest;
use App\Http\Requests\UpdateMarqueProduitRequest;

class MarqueProduitController extends Controller
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
     * @param  \App\Http\Requests\StoreMarqueProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarqueProduitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MarqueProduit  $marqueProduit
     * @return \Illuminate\Http\Response
     */
    public function show(MarqueProduit $marqueProduit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MarqueProduit  $marqueProduit
     * @return \Illuminate\Http\Response
     */
    public function edit(MarqueProduit $marqueProduit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMarqueProduitRequest  $request
     * @param  \App\Models\MarqueProduit  $marqueProduit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMarqueProduitRequest $request, MarqueProduit $marqueProduit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MarqueProduit  $marqueProduit
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarqueProduit $marqueProduit)
    {
        //
    }
}
