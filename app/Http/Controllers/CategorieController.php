<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Models\Produit;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Storage;

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
        $categorie=Categorie::all();
        return view('superadmin.categorie')->with("categorie",$categorie);
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
        $request->validate([
            'label_cat'=>'required',
            'dsc_cat'=>'required',
            'image_cat'=>'image|required|max:1999'
        ]);
        if ($request->hasFile('image_cat')){
            // recuperation du nom du fichier avec son path
            $fileNameWithExt = $request->file('image_cat')->getClientOriginalName();
             //recuperation du nom du fichier seulement
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //recuperation de l'extension
            $extension = $request->file('image_cat')->getClientOriginalExtension();
            // rechercher de noms aleatoire
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // upload image
            $path = $request->file('image_cat')->storeAs('public/images_categories', $fileNameToStore);
            //dd($path);
        } else {
            $fileNameToStore = 'sansimage.png';
        }
        $categorie=new Categorie();
        $categorie->label_cat=$request->input('label_cat');
        $categorie->dsc_cat=$request->input('dsc_cat');
        $categorie->image_cat=$fileNameToStore;
        $categorie->save();
        //return back()->with('status', 'la catégorie a été enregistrée avec succès');
        // Categorie::create($request->all());
        return back()->with('status','Catégorie creer avec success');
    }

    /**
     * Display the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorie=Categorie::find($id);
        return view('superadmin.categorie')->with('categories',$categorie);
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
        $request->validate([
            'label_cat'=>'required',
            'dsc_cat'=>'required',
            'image_cat'=>'image|required|max:1999'
        ]);
        
        $categorie=Categorie::find($request->input('id'));
        $categorie->label_cat=$request->input('label_cat');
        $categorie->dsc_cat=$request->input('dsc_cat');
        if ($request->hasFile('image_cat')){
            // recuperation du nom du fichier avec son path
            $fileNameWithExt = $request->file('image_cat')->getClientOriginalName();
             //recuperation du nom du fichier seulement
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //recuperation de l'extension
            $extension = $request->file('image_cat')->getClientOriginalExtension();
            // rechercher de noms aleatoire
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // upload image
            $path = $request->file('image_cat')->storeAs('public/images_categories', $fileNameToStore);
            //dd($path);
        } else {
            $fileNameToStore = 'sansimage.png';
        }
        $categorie->update();
        return redirect('/categorie')->with('status', 'La catégorie a été modifée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $categorie=Categorie::find($id);
        if($categorie->image_cat !='sansimage.jpg'){
            Storage::delete('public/images_categories/'.$categorie->image_cat);
        }

        $categorie->delete();

        return back()->with('status','Catégorie Supprimer avec success');
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
