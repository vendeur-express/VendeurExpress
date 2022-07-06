<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view('articles', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        'label_pos';
         'dsc_pos';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $validatorPost = Validator::make($request->all(), [
            'post'  => 'required',
            'message'  => 'required',
            'imagepost'  => 'image|required|max:1999',
        ]);
        dd($validatorPost);
        if ($request->hasFile('imagepost')){
            // recuperation du nom du fichier avec son path
            $fileNameWithExt = $request->file('imagepost')->getClientOriginalName();
             //recuperation du nom du fichier seulement
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //recuperation de l'extension
            $extension = $request->file('imagepost')->getClientOriginalExtension();
            // rechercher de noms aleatoire
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // upload image
            $path = $request->file('imagepost')->storeAs('public\images_categories', $fileNameToStore);
            //dd($path);
        } else {
            $fileNameToStore = 'sansimage.png';
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
