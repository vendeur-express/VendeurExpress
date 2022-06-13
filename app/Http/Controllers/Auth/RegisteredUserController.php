<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Nette\Schema\Message;
use App\Models\Demarcheur;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Fournisseur;
use App\Models\Image;
use App\Models\Vendeur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

use function PHPUnit\Framework\isNull;

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
        $userType = "";
        $elements = "";
        $validator = Validator::make($request->all(), [
            'Type_de_compte'  => 'required',
        ]);
        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        } else {
            if ($request->Type_de_compte == "0") {
                $userType = 'Client';
                $validatorClient = Validator::make($request->all(), [
                    'identifiant'  => 'required',
                    'nom'  => 'required',
                    'prenom'  => 'required',
                    'email' => 'required',
                    'telephone' => 'required',
                    'mot_de_passe' => 'required|min:6',

                ]);

                if ($validatorClient->fails()) {
                    return redirect(url()->previous())
                        ->withErrors($validatorClient)
                        ->withInput();
                } else {

                    $elements = Client::create([]);
                }

                // mes modifications
            } elseif ($request->Type_de_compte == "1") {
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
                    'password' => 'required|confirmed|min:6',
                    $request->paiement == '0' ? 'compte_bancaire' : 'mobile' => 'required',
                ]);

                if ($validatorDemarcheur->fails()) {
                    return redirect(url()->previous())
                        ->withErrors($validatorDemarcheur)
                        ->withInput();
                } else {

                    $elements = Demarcheur::create([
                        'cnib_dem' => $request->cnib,
                        'pays_dem' => $request->country,
                        'ville_dem' => $request->ville,
                        'annee_naisse_dem' => $request->date_naissance,
                        'type_paiement' => $request->Type_de_compte == '0' ? 'Virement bancaire' : 'paiement mobile',
                        'numero_compte_dem' => $request->paiement == '0' ? $request->compte_bancaire : $request->mobile,
                        'sexe_dem' => $request->sexe,
                    ]);
                }
            } elseif ($request->Type_de_compte == "2") {
                $userType = 'Fourniseur';
                $validatorFournisseur = Validator::make($request->all(), [
                    'identifiant'  => 'required',
                    'nom'  => 'required',
                    'prenom'  => 'required',
                    'email' => 'required',
                    'boutique' => 'required',
                    'telephone' => 'required',
                    'ville' => 'required',
                    'password' => 'required|confirmed|min:6',
                ]);
                if ($validatorFournisseur->fails()) {
                    return redirect(url()->previous())
                        ->withErrors($validatorFournisseur)
                        ->withInput();
                } else {
                    if (isset($request->code_demarcheur) and !empty($request->code_demarcheur)) {
                        $demarcheur = Demarcheur::where([['code_dem', $request->code_demarcheur]])->get();

                        if (count($demarcheur) == 0) {
                            return redirect(url()->previous())
                                ->withErrors('code demarcheur incorrect')
                                ->withInput();
                        } else {
                            $elements = Fournisseur::create([
                                'ville_four' => $request->ville,
                                'nom_boutique' => $request->boutique,
                                'demarcheurs_id' => $demarcheur[0]->id
                            ]);
                        }
                    } else {
                        $elements = Fournisseur::create([
                            'ville_four' => $request->ville,
                            'nom_boutique' => $request->boutique,
                            'demarcheurs_id' => "",
                        ]);
                    }
                }
            } else {
                $userType = 'Vendeur';
                $validatorVendeur = Validator::make($request->all(), [
                    'identifiant' => 'required',
                    'prenom'  => 'required',
                    'nom'  => 'required',
                    'email' => 'required',
                    'cnib' => 'required',
                    'telephone' => 'required',
                    'ville' => 'required',
                    'date_naissance' => 'required',
                    'password' => 'required|confirmed|min:6',
                ]);

                if ($validatorVendeur->fails()) {
                    return redirect(url()->previous())
                        ->withErrors($validatorVendeur)
                        ->withInput();
                } else {

                    $elements = Vendeur::create([

                        'cnib_ven' => $request->cnib,
                        'ville_ven' => $request->ville,
                        'annee_naisse_ven' => $request->date_naissance,
                        'sexe_ven' => $request->sexe,
                    ]);
                }
            }
        }
        $user = User::create([
            'identifiant_us' => $request->identifiant,
            'nom_us' => $request->nom,
            'prenom_us' => $request->prenom,
            'email_us' => $request->email,
            'tel_us' => $request->telephone,
            'password_us' => Hash::make($request->password),
            'images_id' => Image::where([['type_img', "Avatar"]])->get()[0]->id,
            'userable_id' => $elements->id,
            'userable_type' => "App\\Models\\" . $userType,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}