<?php

namespace App\Http\Controllers;

use App\Models\FavoriteProduit;
use App\Http\Requests\StoreFavoriteProduitRequest;
use App\Http\Requests\UpdateFavoriteProduitRequest;

class FavoriteProduitController extends Controller
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
     * @param  \App\Http\Requests\StoreFavoriteProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFavoriteProduitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FavoriteProduit  $favoriteProduit
     * @return \Illuminate\Http\Response
     */
    public function show(FavoriteProduit $favoriteProduit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FavoriteProduit  $favoriteProduit
     * @return \Illuminate\Http\Response
     */
    public function edit(FavoriteProduit $favoriteProduit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFavoriteProduitRequest  $request
     * @param  \App\Models\FavoriteProduit  $favoriteProduit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFavoriteProduitRequest $request, FavoriteProduit $favoriteProduit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FavoriteProduit  $favoriteProduit
     * @return \Illuminate\Http\Response
     */
    public function destroy(FavoriteProduit $favoriteProduit)
    {
        //
    }
}
