<?php

namespace App\Http\Controllers;

use App\Models\CategorieProduit;
use App\Http\Requests\StoreCategorieProduitRequest;
use App\Http\Requests\UpdateCategorieProduitRequest;

class CategorieProduitController extends Controller
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
     * @param  \App\Http\Requests\StoreCategorieProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieProduitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieProduit  $categorieProduit
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieProduit $categorieProduit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieProduit  $categorieProduit
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieProduit $categorieProduit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieProduitRequest  $request
     * @param  \App\Models\CategorieProduit  $categorieProduit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorieProduitRequest $request, CategorieProduit $categorieProduit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieProduit  $categorieProduit
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieProduit $categorieProduit)
    {
        //
    }
    public function delete_categorie($id){
        $category=CategorieProduit::find($id);
        $category->delete();
        return back()->with('status','Catégorie Supprimée avec succès !');
        
    }
    
}
