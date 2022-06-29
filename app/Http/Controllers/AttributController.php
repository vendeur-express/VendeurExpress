<?php

namespace App\Http\Controllers;

use App\Models\Attribut;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use App\Http\Requests\StoreAttributRequest;
use App\Http\Requests\UpdateAttributRequest;
use App\Models\AttributeValue;

class AttributController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superadmin.attribut', ['attributes' => Attribut::orderBy('id', 'DESC')->get()]);
    }
    //

    // ajout d'un attribut
    public function add_att(Request $req)
    {

        if (intval($req->attr_id) == 0) {
            // enregistrons l'attribut
            if (Attribut::where('label_at', $req->attr_val)->first()) {
                return response()->json(['status' => '409 ', 'data' => '[]']);
            } else {
                $save_attr = Attribut::create(['label_at' => $req->attr_val, 'dsc_at' => $req->attr_dsc]);
                if ($save_attr) {
                    $tbody  = '';
                    foreach (Attribut::orderBy('id', 'DESC')->get() as $key => $value) {

                        $tbody .= '<tr> <td class = "col-7" >' . $value['label_at'] . '</td> <td class = " d-flex justify-content-center" ><button class = "btn btn-info btn-sm mx-2"type = "button" onclick = "edit_attr(' .  htmlspecialchars($value) . ')" > <i class = "fas fa-pencil-alt" ></i>Editer </button> <button class = "btn btn-danger btn-sm mx-2"type = "button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#del_attribut"id = "delete"onclick = "del_modal(' .
                            $value['id']  .
                            ')"><i class = "fas fa-trash" ></i>Supprimer </button> <button class = "btn btn-secondary btn-sm  mx-2"data-backdrop="static" data-keyboard="false"data-toggle = "modal"data-target = "#attribute_values"onclick = "attr_values(' .
                            htmlspecialchars($value) .
                            ')" ><i class = "fas fa-list" > </i>Valeurs </button> </td>';
                    };

                    return response()->json(['status' => '200', 'data' => $tbody]);
                } else {
                    return response()->json(['status' => '422', 'data' => '[]']);
                }
            }
        } 
        else {
            $upd_attr = Attribut::where('id', $req->attr_id)->update(['label_at' => $req->attr_val, 'dsc_at' => $req->attr_dsc]);
            if ($upd_attr) {
                $tbody  = '';
                foreach (Attribut::orderBy('id', 'DESC')->get() as $key => $value) {

                    $tbody .= '<tr> <td class = "col-7" >' . $value['label_at'] . '</td> <td class = " d-flex justify-content-center" ><button class = "btn btn-info btn-sm mx-2"type = "button" onclick = "edit_attr(' .
                        htmlspecialchars($value)  .
                        ')"  > <i class = "fas fa-pencil-alt" ></i>Editer </button> <button class = "btn btn-danger btn-sm mx-2"type = "button" data-toggle="modal" data-target="#del_attribut"data-backdrop="static" data-keyboard="false"id = "delete"onclick = "del_modal(' .
                        $value['id']  .
                        ')"><i class = "fas fa-trash" ></i>Supprimer </button> <button class = "btn btn-secondary btn-sm  mx-2"data-toggle = "modal"data-backdrop="static" data-keyboard="false"data-target = "#attribute_values"onclick = "attr_values(' .
                        htmlspecialchars($value) .
                        ')" ><i class = "fas fa-list" > </i>Valeurs </button> </td>';
                };
                return response()->json(['status' => '200', 'data' =>  $tbody]);
            } else {
                return response()->json(['status' => '422', 'data' => '[]']);
            }
        }
    }

    public function del_att(Request $req)
    {
        // suppression de l'attribut
        if (Attribut::where('id', $req->del_attr_id)->delete()) {
            AttributeValue::where('attribut_id', $req->del_attr_id)->delete();
            $tbody  = '';
            foreach (Attribut::orderBy('id', 'DESC')->get() as $key => $value) {

                $tbody .= '<tr> <td class = "col-7" >' . $value['label_at'] . '</td> <td class = " d-flex justify-content-center" ><button class = "btn btn-info btn-sm mx-2"type = "button" onclick = "edit_attr(' .
                    htmlspecialchars($value) .
                    ')" > <i class = "fas fa-pencil-alt" ></i>Editer </button> <button class = "btn btn-danger btn-sm mx-2"type = "button" data-backdrop="static" data-keyboard="false"data-toggle="modal" data-target="#del_attribut"id = "delete"onclick = "del_modal(' .
                    $value['id']  .
                    ')"><i class = "fas fa-trash" ></i>Supprimer </button> <button class = "btn btn-secondary btn-sm  mx-2"data-backdrop="static" data-keyboard="false"data-toggle = "modal"data-target = "#attribute_values"onclick = "attr_values(' . htmlspecialchars($value)  .
                    ')" ><i class = "fas fa-list" > </i>Valeurs </button> </td>';
            };
            return response()->json(['status' => '200 ', 'data' => $tbody]);
        } else {

            return response()->json(['status' => '422']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttributRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttributRequest $request)
    {
        //
    }


    public function show(Attribut $attribut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribut  $attribut
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribut $attribut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttributRequest  $request
     * @param  \App\Models\Attribut  $attribut
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttributRequest $request, Attribut $attribut)
    {
        //
    }
}