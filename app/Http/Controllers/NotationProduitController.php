<?php

namespace App\Http\Controllers;

use App\Models\NotationProduit;
use App\Http\Requests\StoreNotationProduitRequest;
use App\Http\Requests\UpdateNotationProduitRequest;

class NotationProduitController extends Controller
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
     * @param  \App\Http\Requests\StoreNotationProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotationProduitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NotationProduit  $notationProduit
     * @return \Illuminate\Http\Response
     */
    public function show(NotationProduit $notationProduit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotationProduit  $notationProduit
     * @return \Illuminate\Http\Response
     */
    public function edit(NotationProduit $notationProduit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNotationProduitRequest  $request
     * @param  \App\Models\NotationProduit  $notationProduit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotationProduitRequest $request, NotationProduit $notationProduit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotationProduit  $notationProduit
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotationProduit $notationProduit)
    {
        //
    }
}
