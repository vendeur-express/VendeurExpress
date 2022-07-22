<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Ville;
use App\Models\livraison;
use App\Models\PointLivraison;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Post;
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
        $posts =Post::all();
        return view('superadmin.article')->with('posts',$posts);
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
        return view('superadmin.superajout_produit');
    }
    public function superproduit(){
        return view('superadmin.superproduit');
    }
    public function indexlivraison(){
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $livraisons = Livraison::all()->toArray();
        $ville = Ville::all();
        return view('superadmin.livraison')->with('livraisons', $livraisons)->with('ville',$ville);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $livraisons = PointLivraison::all();
        return view('superadmin.livraison', conpact('livraisons'));
=======
        $livraisons = Livraison::all()->toArray();
=======
        $livraisons = Livraison::all();
        
>>>>>>> Stashed changes
        $ville = Ville::all();
        return view('superadmin.livraison')->with('livraisons', $livraisons)->with('ville',$ville);
>>>>>>> dafe2075092c9cdf6b24bf22ec445ae44129d224
=======
        $livraisons = Livraison::all()->toArray();
        $ville = Ville::all();
        return view('superadmin.livraison')->with('livraisons', $livraisons)->with('ville',$ville);
>>>>>>> dafe2075092c9cdf6b24bf22ec445ae44129d224
>>>>>>> Stashed changes
    }
    public function publicite(){
        return view('superadmin.publicite');
    }
    public function supercoupon(){
        return view('superadmin.supercoupon');
    }
    
    
    // banniere ou pubs d'acceuil
    public function banniere(){
        $sliders=Slider::all();
        return view('superadmin.banniere',['sliders' => Slider::orderBy('id', 'DESC')->get(),'status'=>'status']);
    }
    public function supprimerSlider($id){
        $sliders=Slider::find($id);
        Storage::delete('public/images_sliders'.$sliders->image_slid);
        $sliders->delete();
        return back()->with('status', 'La présentation a été supprimer avec succès');
    }
    public function activerSlider($id){
        $sliders=Slider::find($id);
        $sliders->status=1;
        $sliders->update();
        return back();
    }
    public function desactiverSlider($id){
        $sliders=Slider::find($id);
        $sliders->status=0;
        $sliders->update();
        return back();
    }
    public function update_slid(Request $request){
        $this->validate($request,[
            'titre_slid'=>'required',
            'dsc_slid'=>'required',
            'image_slid'=>'image|required|max:1999',
            'url_slid'=>'required' 
        ]);
        $sliders=new Slider();
        $sliders=Slider::find($request->input('id_slid'));
        $fileNameWithExt=$request->file('image_slid')->getClientOriginalName();
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image_slid')->getClientOriginalExtension();
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image_slid')->storeAs('/public/images_sliders',$fileNameToStore);
        $sliders->titre_slid=$request->input('titre_slid');
        $sliders->dsc_slid=$request->input('dsc_slid');
        $sliders->url_slid=$request->input('url_slid');
        $sliders->status=0;
        $sliders->image_slid=$fileNameToStore;
        $sliders->update();
        return back()->with('status','La presentation a été modifiée avec succès');
    }
    public function add_slid(Request $request){
        $this->validate($request,[
            'titre_slid'=>'required',
            'dsc_slid'=>'required',
            'image_slid'=>'image|required|max:1999',
            'url_slid'=>'required' 
        ]);
        $fileNameWithExt=$request->file('image_slid')->getClientOriginalName();
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image_slid')->getClientOriginalExtension();
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image_slid')->storeAs('/public/images_sliders',$fileNameToStore);
        $sliders=new Slider();
        $sliders->titre_slid=$request->input('titre_slid');
        $sliders->dsc_slid=$request->input('dsc_slid');
        $sliders->url_slid=$request->input('url_slid');
        $sliders->image_slid=$fileNameToStore;
        $sliders->status=1;
        $sliders->save();
        return back()->with('status','La presentation a été enregistrée avec succès');
    } 
}