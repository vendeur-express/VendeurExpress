<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Models\CategorieImage;
use App\Models\Image;
use App\Models\Produit;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Storage;

class CategorieController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public $search = '';
    public function index()
    {
        // $categorie=Categorie::where('label_cat','like','%'.$this->search.'%')->orderBy('id','DESC')
        // ->paginate(50);
        return view('superadmin.categorie',['categorie' => Categorie::orderBy('id', 'DESC')->get()]);
        // ->with("categorie",$categorie);
    }


    // public function del_cat(Request $req)
    // {
    //     // suppression de la categorie
    //     if (Categorie::where('id', $req->del_cat_id)->delete()) {
    //         $tbody  = '';
    //         foreach (Categorie::orderBy('id', 'DESC')->get() as $key => $value){
    //             $tbody .= '<tr> 
    //             <td class = "col-7" >' . $value['label_cat'] . ' </td>
    //             <td class = "col-7" >' .$value['dsc_cat'].'</td>
    //             </tr>';
    //         }
    //         return response()->json(['status' => '200 ', 'data' => $tbody]);
    //     } else {

    //         return response()->json(['status' => '422']);
    //     }
    // }

    //  ajouter categorie
    // public function add_cat(Request $req){
    //     if(Request::hasFile('image_cat'))
    //     {
    //         // recuperation du nom du fichier avec son path
    //         $fileNameWithExt = Request::file('image_cat');
    //         $filename=$file->getClientOriginalName();
    //         $path=public_path().'/uploads/';
    //         //recuperation du nom du fichier seulement
    //     }
    //     if (intval($req->categorie_id) == 0){
    //         if (Categorie::where('label_cat', $req->cat_val)->first()) {
    //             return response()->json(['status' => '409 ', 'data' => '[]']);
    //         }else{
    //             $save_cat=Categorie::create(['label_cat' => $req->cat_val, 'dsc_cat' => $req->cat_dsc]) ;
    //             if ($save_cat){
    //                 $tbody  = '';

    //                 foreach (Categorie::orderBy('id', 'DESC')->get() as $key => $value){
    //                     $tbody .= 
    //                     '<tr> 
    //                         <td class = "col-7" >' . $value['label_cat'] . '</td>
    //                         <td class="col-7>'.$value['dsc_cat'].'</td>
    //                         <td>
    //                         </td>
    //                         <td class = " d-flex justify-content-center">
    //                             <button class = "btn btn-info btn-sm mx-2"type = "button" onclick ="edit_cat(' .
    //                         htmlspecialchars($value) .')" > 
    //                             <i class = "fas fa-pencil-alt" ></i>Editer 
    //                             </button> 
    //                             <button class = "btn btn-danger btn-sm mx-2"type = "button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#del_cat" id = "delete" onclick = "del_modal(' .
    //                             $value['id']  .
    //                             ')"><i class= "fas fa-trash" ></i>Supprimer </button>
    //                         </td>
    //                     </tr>';
    //                 };
    //                 return response()->json(['status' => '200', 'data' => $tbody]);
    //             }else {
    //                 return response()->json(['status' => '422', 'data' => '[]']);
    //             }
    //         }    
        
    //     }else {
    //         $upd_attr = Categorie::where('id', $req->attr_id)->update(['label_at' => $req->attr_val, 'dsc_at' => $req->attr_dsc]);
    //         if ($upd_attr) {
    //             $tbody  = '';
    //             foreach (Categorie::orderBy('id', 'DESC')->get() as $key => $value) {

    //                 $tbody .= '<tr> <td class = "col-7" >' . $value['label_at'] . '</td> <td class = " d-flex justify-content-center" ><button class = "btn btn-info btn-sm mx-2"type = "button" onclick = "edit_attr(' .
    //                     htmlspecialchars($value)  .
    //                     ')"  > <i class = "fas fa-pencil-alt" ></i>Editer </button> <button class = "btn btn-danger btn-sm mx-2"type = "button" data-toggle="modal" data-target="#del_categorie"data-backdrop="static" data-keyboard="false"id = "delete"onclick = "del_modal(' .
    //                     $value['id']  .
    //                     ')"><i class = "fas fa-trash" ></i>Supprimer </button> <button class = "btn btn-secondary btn-sm  mx-2"data-toggle = "modal"data-backdrop="static" data-keyboard="false"data-target = "#attribute_values"onclick = "attr_values(' .
    //                     htmlspecialchars($value) .
    //                     ')" ><i class = "fas fa-list" > </i>Valeurs </button> </td>';
    //             };
    //             return response()->json(['status' => '200', 'data' =>  $tbody]);
    //         } else {
    //             return response()->json(['status' => '422', 'data' => '[]']);
    //         }
    //     }



    // }

    // supprimer ctegorie
    public function suprimer_cat($id){
        $categorie=Categorie::find($id);
        if($categorie->image_cat !='sansimage.jpg'){
            Storage::delete('public/images_categories/'.$categorie->image_cat);
        }
        $categorie->delete();
        return back()->with('probleme','Categorie supprimée avec succès');
    }


    // enregistrer categorie
    public function store(StoreCategorieRequest $request)
    {
        //
        $request->validate([
            'label_cat'=>'required',
            'dsc_cat'=>'required',
            'image_cat'=>'image|required|max:1999'
            
        ]);
        if ($request->hasFile('image_cat')){
            // recuperation du nom du fichier avec son path
            $fileNameWithExt = $request->file('image_cat')->getClientOriginalName();
             //recuperation du nom du fichier seulement
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //recuperation de l'extension
            $extension = $request->file('image_cat')->getClientOriginalExtension();
            // rechercher de noms aleatoire
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // upload image
            $path = $request->file('image_cat')->storeAs('images_categories', $fileNameToStore);
            
        } else {
            $fileNameToStore = 'sansimage.png';
        }
        $image=Image::create(["alt_img"=>$fileNameWithExt,"url_img"=>$path,"type_img"=>"Categorie"]);
        if($image){
            $categorie=new Categorie();
            $categorie->label_cat=$request->input('label_cat');
            $categorie->dsc_cat=$request->input('dsc_cat');
            $categorie->image_cat=$fileNameToStore;
            if($categorie->save()){
                $imagecat=CategorieImage::create(["categorie_id"=>$categorie->id,
            "image_id"=>$image->id]);
            }else{
            dd("categorie non enrégistrée");
            }
            
        }else{
            dd("image non enrégistrée");
        }

        //return back()->with('status', 'la catégorie a été enregistrée avec succès');
        // Categorie::create($categorie->all());
        return redirect('categorie')
        ->with('status','Catégorie ajoutée avec succès');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        //
        
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \App\Http\Requests\StoreCategorieRequest  $request
    //  * @return \Illuminate\Http\Response
    //  */
   

    // /**
    //  * Display the specified resource.
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Categorie  $categorie
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Categorie $categorie)
    {
        
        
    }

    public function edit($id)
    {
        //
        $categorie=Categorie::find($id);
        return view('superadmin.categorie')->with('categories',$categorie);
    }

    public function update(UpdateCategorieRequest $request, Categorie $categorie)
    {
        //
        $request->validate([
            'label_cat'=>'required',
            'dsc_cat'=>'required',
            'image_cat'=>'image|required|max:1999'
        ]);
        
        $categorie=Categorie::find($request->input('id'));
        $categorie->label_cat=$request->input('label_cat');
        $categorie->dsc_cat=$request->input('dsc_cat');
        if ($request->hasFile('image_cat')){
            // recuperation du nom du fichier avec son path
            $fileNameWithExt = $request->file('image_cat')->getClientOriginalName();
             //recuperation du nom du fichier seulement
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //recuperation de l'extension
            $extension = $request->file('image_cat')->getClientOriginalExtension();
            // rechercher de noms aleatoire
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // upload image
            $path = $request->file('image_cat')->storeAs('public\images_categories', $fileNameToStore);
            //dd($path);
        } else {
            $fileNameToStore = 'sansimage.png';
        }
        $categorie->update();
        return redirect()->route('superadmin.categorie')->with('status', 'La catégorie a été modifée avec succès');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  * 
    //  * @param  \App\Models\Categorie  $categorie
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        //
        $categorie=Categorie::find($id);
        if($categorie->image_cat !='sansimage.jpg'){
            Storage::delete('public/images_categories/'.$categorie->image_cat);
        }
        dd($categorie);
        $categorie->delete();
        return back()->with('status','Catégorie Supprimer avec success');
    }
    
    public function editer_cat(UpdateCategorieRequest $request,$id){
        $categorie=Categorie::find($id);
        if($categorie){
            $this->categorie_id = $categorie->id;
            $this->label_cat=$categorie->label_cat;
            $this->dsc_cat=$categorie->dsc_cat;
            if ($request->hasFile('image_cat')){
                // recuperation du nom du fichier avec son path
                $fileNameWithExt = $request->file('image_cat')->getClientOriginalName();
                 //recuperation du nom du fichier seulement
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                //recuperation de l'extension
                $extension = $request->file('image_cat')->getClientOriginalExtension();
                // rechercher de noms aleatoire
                $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
                // upload image
                $path = $request->file('image_cat')->storeAs('public\images_categories', $fileNameToStore);
                //dd($path);
            } else {
                $fileNameToStore = 'sansimage.png';
            }
            $categorie->update();
            session()->flash('status','Categorie  avec succès');
        }
    }
}
