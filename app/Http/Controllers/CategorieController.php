<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use GuzzleHttp\Psr7\Request;

class CategorieController extends Controller
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
     * @param  \App\Http\Requests\StoreCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
        // $this->validate($request,[
        //     'label_cat'=>'required|unique:categories',
        //     'type_cat'=>'required',
        //      'dsc_cat'=>'nullable',
        //     'image_cat'=>'image|nullable|max:1999'
        // ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieRequest  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorieRequest $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
    public function sauvercategorie(Request $request){

        // $this->validate($request,[
        //     'label_cat'=>'required|unique:categories',
        //     'type_cat'=>'required',
        //     'dsc_cat'=>'nullable',
        //     'image_cat'=>'image|nullable|max:1999'
        // ]);
        // if($request->hash_file('image_cat')){
        //     /* recupération du fichier avec son extension */
        //     $fileNameWithExt=$request->file('image_cat')->getClientOriginalName();
        //     /* recuperation deu nom uniquement */
        //     $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //     /* recuperation de l'extension */
        //     $extension=$request->file('image_cat')->getClientOriginalExtension();
        //     /* recherche de nom aleatoire */
        //     $fileNameToStore = $fileName .'_' . time(). '.' .$extension;
        //     /* upload image */
        //     $path=$request->file('image_cat')->storeAs('public/images_categories',$fileNameToStore);
        // }else{
        //     $fileNameToStore='sansimage.png';
        // }
        // $categorie=new Categorie();
        // $categorie->label_cat=$request->input('label_cat');
        // $categorie->label_cat=$request->input('dsc_cat');
        // $categorie->image_cat=$fileNameToStore;
        // $categorie->save();
        dd($request);
        //return back()->with('status','categorie bien enregistrée');
    }
}
