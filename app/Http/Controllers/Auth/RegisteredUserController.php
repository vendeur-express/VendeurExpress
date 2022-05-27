<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return "BIEN";
    }

    /**
     * Handle an incoming registration request.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request);
        // $clientValid = [
        //     'identifiant'  => ['required', 'string', 'max:255'],
        //     'nom'  => ['required', 'string', 'max:255'],
        //     'prenom'  => ['required', 'string', 'max:255'],
        //     'email' =>  ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'mot_de_passe' => ['required', 'confirm_pass', Rules\Password::defaults()],
        // ];

        // $FourniValid = [
        //     'identifiant'  => ['required', 'string', 'max:255'],
        //     'nom'  => ['required', 'string', 'max:255'],
        //     'prenom'  => ['required', 'string', 'max:255'],
        //     'email' =>  ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'boutique' => ['required', 'string', 'max:255'],
        //     'cnib' => ['required', 'string', 'max:255'],
        //     'telephone' => ['required', 'string', 'max:255'],
        //     'country' => ['required', 'string', 'max:255'],
        //     'ville' => ['required', 'string', 'max:255'],
        //     'date_naissance' => ['required', 'string', 'max:255'],
        //     'sexe' => ['required', 'string', 'max:255'],
        //     'paiement' => ['required', 'string', 'max:255'],
        //     'mobile' => ['required', 'string', 'max:255'],
        //     'compte_bancaire' => ['required', 'string', 'max:255'],
        //     'mot_de_passe' => ['required', 'confirm_pass', Rules\Password::defaults()],
        // ];


        // $demarcheurValid = [
        //     'identifiant'  => ['required', 'string', 'max:255'],
        //     'nom'  => ['required', 'string', 'max:255'],
        //     'prenom'  => ['required', 'string', 'max:255'],
        //     'email' =>  ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'boutique' => ['required', 'string', 'max:255'],
        //     'cnib' => ['required', 'string', 'max:255'],
        //     'telephone' => ['required', 'string', 'max:255'],
        //     'country' => ['required', 'string', 'max:255'],
        //     'ville' => ['required', 'string', 'max:255'],
        //     'date_naissance' => ['required', 'string', 'max:255'],
        //     'sexe' => ['required', 'string', 'max:255'],
        //     'paiement' => ['required', 'string', 'max:255'],
        //     'mobile' => ['required', 'string', 'max:255'],
        //     'compte_bancaire' => ['required', 'string', 'max:255'],
        //     'mot_de_passe' => ['required', 'confirm_pass', Rules\Password::defaults()],
        // ];
        // $vendeurValid = [];

dd($request->validate([
            'Type_de_compte'  => ['required',],
            'identifiant'  => ['required',],
            'nom'  => ['required', 'string', 'max:255'],
            'prenom'  => ['required', 'string', 'max:255'],
            'email' =>  ['required','email', 'max:255'],
            'boutique' => ['required',],
            'cnib' => ['required',],
            'telephone' => ['required'],
            'country' => ['required'],
            'ville' => ['required'],
            'date_naissance' => ['required'],
            'sexe' => ['required',],
            'paiement' => ['required'],

]));
        


        // $user = Demarcheur::create([
        //     'code_dem' => 'Code',
        //     'cnib_dem' => $request->cnib,
        //     'pays_dem' => $request->country,
        //     'ville_dem' => $request->ville,
        //     'annee_naisse_dem' => $request->date_naissance,
        //     'type_paiement' => $request->Type_de_compte,
        //     'numero_compte_dem' => $request->mobile,
        //     'sexe_dem' => $request->sexe,
        // ]);


        // 'tel_us' => $request->tel_us,
        // 'password_us' => Hash::make($request->password_us),





        // event(new Registered($user));

        // Auth::login($user); 

        // return redirect(RouteServiceProvider::HOME);
        return   "HELLO";
    }
}
