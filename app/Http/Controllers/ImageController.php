<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;

class ImageController extends Controller
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

    public function save_avatar()
    {
        if (Image::create(['alt_img' => 'Avatar', 'url_img' => 'app/img', 'type_img' => 'Avatar'])) {
            return "Avatar inserted";
        } else {
            return "Cannot insert avatar";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageRequest $request)
    {
    //     $validatorimage =Validator::make($request->all(),[
    //         'alt_img' => 'require',
    //         'url_img' =>'require', 
    //         'type_img' =>'require',
    //     ]);

    //     if ($validatorimage->fails()) {
    //         return redirect(url()->previous())
    //             ->withErrors($validatorimage)
    //             ->withInput();
    //     } else {

    //          $elements = Image::create([

    //             'alt_img' => $request->cnib,
    //             'url_img' => $request->ville,
    //             'type_img' => $request->date_naissance,
                
    //         ]);
    //     }
        
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageRequest  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}