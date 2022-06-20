<?php

namespace App\Http\Controllers;

use App\Models\AttributeValue;
use App\Http\Requests\StoreAttributeValueRequest;
use App\Http\Requests\UpdateAttributeValueRequest;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    public function create(Request $req)
    {
        if ($req->attr_val_type == "0") {
            if (AttributeValue::where(['value' => $req->attr_val, 'attribut_id' => $req->id_attr])->first()) {
                return response()->json(['status' => '409 ', 'data' => '[]']);
            } else {
                if (AttributeValue::create(['value' => $req->attr_val, 'attribut_id' => $req->id_attr])) {
                    $tbody  = '';
                    foreach (AttributeValue::where(['attribut_id' => $req->id_attr])->orderBy('id', 'DESC')->get() as $key => $value) {
                        $tbody .= '<tr class="d-flex"><td class="col-sm-4 col-md-6 col-lg-8">' . $value['value'] . '</td><td class="col-sm-8 col-md-6 col-lg-4 d-flex justify-content-end"><button type="button" class="btn btn-info btn-sm mx-2"onclick="edit_attr_val(' . htmlspecialchars(json_encode($value['value'])) . ',' . $value['id'] . ')"><i class="fas fa-pencil-alt"></i>Editer</button><button class="btn btn-danger btn-sm" id="delete" type="button" data-toggle="modal" data-target="#del_attr_val_modal" onclick="attr_val_del_modal(' . $value['id'] . ')"><i class="fas fa-trash"></i>Supprimer</button></td></tr>';
                    };
                    return response()->json(['status' => '200', 'data' => $tbody]);
                } else {
                    return response()->json(['status' => '422', 'data' => '[]']);
                }
            }
        } else {
            $upd_attr_val = AttributeValue::where('id', $req->attr_val_id)->update(['value' => $req->attr_val]);
            if ($upd_attr_val) {
                $tbody  = '';
                foreach (AttributeValue::where(['attribut_id' => $req->id_attr])->get() as $key => $value) {
                    $tbody .= '<tr class="d-flex"><td class="col-sm-4 col-md-6 col-lg-8">' . $value['value'] . '</td><td class="col-sm-8 col-md-6 col-lg-4 d-flex justify-content-end"><button type="button" class="btn btn-info btn-sm mx-2"onclick="edit_attr_val(' . htmlspecialchars(json_encode($value['value'])) . ',' . $value['id'] . ')"><i class="fas fa-pencil-alt"></i>Editer</button><button class="btn btn-danger btn-sm" id="delete" type="button" data-toggle="modal" data-target="#del_attr_val_modal" onclick="attr_val_del_modal(' . $value['id'] . ')"><i class="fas fa-trash"></i>Supprimer</button></td></tr>';
                };
                return response()->json(['status' => '200', 'data' =>  $tbody]);
            } else {
                return response()->json(['status' => '422', 'data' => '[]']);
            }
        }
    }
    public function del(Request $req)
    {
        // suppression de l'attribut
        if ($attr_val = AttributeValue::find($req->del_attr_val_id)) {
            $attr_val->delete();
            $tbody  = '';
            foreach (AttributeValue::where(['attribut_id' => $attr_val->attribut_id])->orderBy('id', 'DESC')->get() as $key => $value) {
                $tbody .= '<tr class="d-flex"><td class="col-sm-4 col-md-6 col-lg-8">' . $value['value'] . '</td><td class="col-sm-8 col-md-6 col-lg-4 d-flex justify-content-end"><button type="button" class="btn btn-info btn-sm mx-2"onclick="edit_attr_val(' . htmlspecialchars(json_encode($value['value'])) . ',' . $value['id'] . ')"><i class="fas fa-pencil-alt"></i>Editer</button><button class="btn btn-danger btn-sm" id="delete" type="button" data-toggle="modal" data-target="#del_attr_val_modal" onclick="attr_val_del_modal(' . $value['id'] . ')"><i class="fas fa-trash"></i>Supprimer</button></td></tr>';
            };
            return response()->json(['status' => '200 ', 'data' => $tbody]);
        } else {

            return response()->json(['status' => '422']);
        }
    }
}