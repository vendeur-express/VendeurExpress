<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\User;

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
    public function banniere(){
        return view('superadmin.banniere');
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
}