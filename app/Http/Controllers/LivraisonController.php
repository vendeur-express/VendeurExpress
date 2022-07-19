<?php

namespace App\Http\Controllers;
use App\Models\Attribut;
use App\Models\Livraison;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\PointLivraison;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreLivraisonRequest;
use App\Http\Requests\UpdateLivraisonRequest;
use Illuminate\Support\Facades\Redirect;

class LivraisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('superadmin.Livraison');
        // ['ajjou' => Attribut::orderBy('id', 'DESC')->get()]);
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

    public function livraison(Request $request)
    {
      
        $validator = Validator::make($request->all(), [
            'num_boutique' => 'required',
            'bout_desc'  => 'required',
            'latitude'  => 'required',
            'longitude' => 'required',


        ]); 
        if ($validator->fails()) {
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
        } else {

            $livraison = Livraison::create([   
                'code_li'=> $request->num_boutique,
                'nom_li' => $request->bout_desc,
                'logitude' => $request->latitude,
                'altitude' => $request->longitude,
                'ville_id' => $request->idville,
            ]);
        }
        return view('superadmin.Livraison');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livraison  $livraison
     * @return \Illuminate\Http\Response
     */
    public function show(Livraison $livraison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livraison  $livraison
     * @return \Illuminate\Http\Response
     */
    public function edit(Livraison $livraison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLivraisonRequest  $request
     * @param  \App\Models\Livraison  $livraison
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLivraisonRequest $request, Livraison $livraison)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livraison  $livraison
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livraison= Livraison::find($id);
        if ($livraison) {
            $livraison->indexlivraison()->delete();
            $livraison->delete();
            return Redirect('superadmin.livraison')->with('message','livraison supprimer avec succes');
        }else{
            return Redirect('superadmin.livraison')->with('message','id de livraison non trouvez');
        }
    }
}
