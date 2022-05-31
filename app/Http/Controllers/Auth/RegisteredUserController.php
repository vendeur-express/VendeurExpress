<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Nette\Schema\Message;
use App\Models\Demarcheur;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view("client.inscription");
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

        // $request->validate([
        //             'type_de_compte'  => ['required'],
        //             'identifiant'  => ['required'],
        //             'nom'  => ['required'],

        // ]);
        $userType = "";
        $validator = Validator::make($request->all(), [
            'Type_de_compte'  => 'required',
        ]);
        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        } else {
            if ($request->Type_de_compte == "0") {
                $userType = 'Demarcheur';
                $validatorDemarcheur = Validator::make($request->all(), [
                    'identifiant'  => 'required',
                    'nom'  => 'required',
                    'prenom'  => 'required',
                    'email' => 'required',
                    'boutique' => 'required',
                    'cnib' => 'required',
                    'telephone' => 'required',
                    'country' => 'required',
                    'ville' => 'required',
                    'date_naissance' => 'required',
                    'sexe' => 'required',
                    'paiement' => 'required',
                    'mot_de_passe' => 'required|min:6',
                    $request->paiement == '0' ? 'compte_bancaire' : 'mobile' => 'required',
                ]);

                if ($validatorDemarcheur->fails()) {
                    return redirect(url()->previous())
                        ->withErrors($validatorDemarcheur)
                        ->withInput();
                } else {

                    $demarcheur = Demarcheur::create([
                        'cnib_dem' => $request->cnib,
                        'pays_dem' => $request->country,
                        'ville_dem' => $request->ville,
                        'annee_naisse_dem' => $request->date_naissance,
                        'type_paiement' => $request->Type_de_compte == '0' ? 'Virement bancaire' : 'paiement mobile',
                        'numero_compte_dem' => $request->paiement == '0' ? $request->compte_bancaire : $request->mobile,
                        'sexe_dem' => $request->sexe,
                    ]);
                }
            } else {

                die("Quitter");
            }
        }


        $user = User::create([
            'firstname_us' => $request->nom,
            'lastname_us' => $request->prenom,
            'identifiant_us' => $request->country,
            'cnib_us' => $request->cnib,
            'email_us' => $request->email,
            'tel_us' => $request->telephone,
            'password_us' => Hash::make($request->password_us),
            'images_id' => Image::where([['type_img', "Avata"]])->get()[0]->id,
            'userable_id' => $demarcheur->id,
            'userable_type' => "App\\Models\\" . $userType,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}