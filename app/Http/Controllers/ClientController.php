<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('acceuil.acceuil');
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
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $request->validate([
            'identifiant' => ['required', 'max:255'],
            'nom' => ['required', 'max:255'],
            'prenom' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'password_confirm' => 'required',
            'password_c' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    public function home()
    {
        return view('client.client');
    }
    public function vexshop()
    {
        return view('client.vexshop');
    }
    public function apropos()
    {
        return view('client.apropos');
    }
    public function blog()
    {
        return view('client.blog');
    }
    public function inscription()
    {
        return view('client.inscription');
    }
    public function panier()
    {
        return view('client.panier');
    }
    public function produit()
    {
        return view('client.produit');
    }
    public function paiement()
    {
        return view('client.paiement');
    }
    public function favorie()
    {
        return view('client.favorie');
    }
    public function contact()
    {
        return view('client.contact');
    }
}