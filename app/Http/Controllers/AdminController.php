<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Slider;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;
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
    public function livraison(){
        return view('superadmin.livraison');
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
        return view('superadmin.banniere',['sliders' => Slider::orderBy('id', 'DESC')->get()]);
    }
    public function add_slid(Request $request){
        if (intval($request->slid_id) == 0){

            if(Slider::where('titre_slid', $request->titre_slid)->first()){
                return response()->json(['status' => '409 ', 'data' => '[]']);
            }
            else {
                $fileNameWithExt = $request->file('image_slid')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image_slid')->getClientOriginalExtension();
                $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
                $save_slid = Slider::create([
                    'titre_slid' => $request->titre_slid,
                    'url_slid' => $request->url_slid,
                    'dsc_slid'=>$request->dsc_slid,
                    'image_slid'=>$request->$fileNameToStore
                ]);
                if ($save_slid) {
                    $tbody  = '';
                    foreach (Slider::orderBy('id', 'DESC')->get() as $key => $value){
                        $tbody .= '<tr> <td class = "col-7" >' . $value['titre_slid'] . '</td>
                        <td>'.$value ['dsc_slid'].'</td>
                        <td class = " d-flex justify-content-center" ><button class = "btn btn-info btn-sm mx-2"type = "button" onclick = "edit_slid(' .  htmlspecialchars($value) . ')" > <i class = "fas fa-pencil-alt" ></i>Editer </button>  </td>'; 
                    };
                    return response()->json(['status' => '200', 'data' => $tbody]);
                }else {
                    return response()->json(['status' => '422', 'data' => '[]']);
                }    
            }
        }
        else {
            $fileNameWithExt = $request->file('image_slid')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image_slid')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $upd_slid = Slider::where('id', $request->slid_id)->update(
                [
                    'titre_slid' => $request->titre_slid,
                    'url_slid' => $request->url_slid,
                    'dsc_slid'=>$request->dsc_slid,
                    'image_slid'=>$request->$fileNameToStore
                ]);
            if ($upd_slid) {
                $tbody  = '';
                foreach (Slider::orderBy('id', 'DESC')->get() as $key => $value) {

                    $tbody .='<tr> <td class = "col-7" >' . $value['titre_slid'] . '</td>
                    <td>'.$value ['dsc_slid'].'</td>
                    <td class = " d-flex justify-content-center" ><button class = "btn btn-info btn-sm mx-2"type = "button" onclick = "edit_slid(' .  htmlspecialchars($value) . ')" > <i class = "fas fa-pencil-alt" ></i>Editer </button>  </td>';
                };
                return response()->json(['status' => '200', 'data' =>  $tbody]);
            } else {
                return response()->json(['status' => '422', 'data' => '[]']);
            }
        }
    }
    public function del_bann($id){
        $categorie=Slider::find($id);
        if($categorie->image_cat !='sansimage.jpg'){
            Storage::delete('public/images_sliders/'.$categorie->image_cat);
        }
        dd($categorie);
        $categorie->delete();
        return back()->with('status','Presentation Supprimée avec success');
    } 
}