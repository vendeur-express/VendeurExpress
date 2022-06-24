<?php

namespace App\Http\Controllers;

use App\Models\ImageProduit;
use Illuminate\Http\Request;
use App\Http\Requests\StoreImageProduitRequest;
use App\Http\Requests\UpdateImageProduitRequest;

class ImageProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreImageProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageProduitRequest $request)
    {
        $request->validate([
            

        ]);

        // $elements = ImageProduit::create([]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageProduit  $imageProduit
     * @return \Illuminate\Http\Response
     */
    public function show(ImageProduit $imageProduit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageProduit  $imageProduit
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageProduit $imageProduit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageProduitRequest  $request
     * @param  \App\Models\ImageProduit  $imageProduit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageProduitRequest $request, ImageProduit $imageProduit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageProduit  $imageProduit
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageProduit $imageProduit)
    {
        //
    }
    // function upload(Request $request)
    // {
    //  $image = $request->file('file');

    //  $imageName = time() . '.' . $image->extension();

    //  $image->move(public_path('images'), $imageName);

    //  return response()->json(['success' => $imageName]);
    // }
    // function fetch()
    // {
    //  $images = \File::allFiles(public_path('images'));
    //  $output = '<div class="row">';
    //  foreach($images as $image)
    //  {
    //   $output .= '
    //   <div class="col-md-2" style="margin-bottom:16px;" align="center">
    //             <img src="'.asset('images/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
    //             <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
    //         </div>
    //   ';
    //  }
    //  $output .= '</div>';
    //  echo $output;
    // }

    // function delete(Request $request)
    // {
    //  if($request->get('name'))
    //  {
    //   \File::delete(public_path('images/' . $request->get('name')));
    //  }
    // }
}
