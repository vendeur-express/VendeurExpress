<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProduitsRequest;
use App\Http\Requests\UpdateProduitsRequest;
use App\Models\Produit;

class ProduitsController extends Controller
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
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduitsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduitsRequest $request)
    {
        $validatorimage = Validator::make($request->all(), [
           'nomproduit' => 'required',
            'description'  => 'required',
             'prix'  => 'required',
         ]); 
         
        
         if ($validatorimage->fails()) {
            return redirect(url()->previous())
                ->withErrors($validatorimage)
                ->withInput();
        } else {

            
             back()->with('produit a ete ajouter avec success');
    
        }
        $produits = produit:: create([
            'label_pro' => $request->nomproduit,
            'dsc_pro' => $request ->description,
            'prix_pro'=> $request ->prix,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function show( $produits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function edit( $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduitsRequest  $request
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduitsRequest $request,  $produits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function destroy( $produits)
    {
        //
    }
}
