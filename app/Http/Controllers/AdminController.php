<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.dashboard');
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
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function ajout_produit(){
        return view('admin.ajout_produit');
    }
    public function avis(){
        return view('admin.avis');
    }
    public function commande(){
        return view('admin.commande');
    }
    public function coupon(){
        return view('admin.coupon');
    }
    public function magasin(){
        return view('admin.magasin');
    }
    public function produits(){
        return view('admin.produits');
    }
    public function reglage(){
        return view('admin.reglage');
    }
    public function rembourser(){
        return view('admin.rembourser');
    }
    public function retrait(){
        return view('admin.retrait');
    }
    public function rapport(){
        return view('admin.rapport');
    }
    // supper admin
    public function dashboard(){
        return view('superadmin.dashboard');
       
    }
    public function supercommande(){
        return view('superadmin.supercommande');
    }
    public function ajout_categorie(){
        return view('superadmin.ajout_categorie');
    }
    public function categorie(){
        return view('superadmin.categorie');
    }
    public function article(){
        return view('superadmin.article');
    }
    
    public function superclient(){
        $users = User::all();
        return view('superadmin.superclient')->with('users',$users);

    }
    public function commentaire(){
        return view('superadmin.commentaire');
    }
    public function compte(){
        return view('superadmin.compte');
    }
    public function parametre(){
        return view('superadmin.parametre');
    }
    public function superajout_produit(){
        return view('superadmin.commentaire');
    }
    public function superproduit(){
        return view('superadmin.superproduit');
    }
    public function publicite(){
        return view('superadmin.publicite');
    }
    public function supercoupon(){
        return view('superadmin.supercoupon');
    }
    
    
    // banniere ou pubs d'acceuil
    public function banniere(){
        $sliders=Slider::all()->limit(4);
        return view('superadmin.banniere');
    }
    public function add_bann(Request $request){
        $request->validate([
            'titre_slid'=>'required',
            'dsc_slid'=>'required',
            'url_slid'=>'required',
            'image_slid'=>'image|required|max:1999'
        ]);
        if($request->hasFile('image_slid')){
            // recuperation du nom du fichier avec son path
            $fileNameWithExt = $request->file('image_slid')->getClientOriginalName();
             //recuperation du nom du fichier seulement
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //recuperation de l'extension
            $extension = $request->file('image_slid')->getClientOriginalExtension();
            // rechercher de noms aleatoire
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // upload image
            $path = $request->file('image_cat')->storeAs('images_categories', $fileNameToStore);

        }
        $sliders=new Slider();
        $sliders->titre_slid=$request->input('titre_slid');
        $sliders->dsc_slid=$request->input('dsc_slid');
        $sliders->image_slid=$request->$fileNameToStore;
        $sliders->url_slid=$request->input('url_slid');
        $sliders->status=1;
    }
    public function del_bann($id){
        $categorie=Slider::find($id);
        if($categorie->image_cat !='sansimage.jpg'){
            Storage::delete('public/images_categories/'.$categorie->image_cat);
        }
        dd($categorie);
        $categorie->delete();
        return back()->with('status','Catégorie Supprimer avec success');
    } 
}