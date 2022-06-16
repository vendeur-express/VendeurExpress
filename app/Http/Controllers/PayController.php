<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use App\Http\Requests\StorePayRequest;
use App\Http\Requests\UpdatePayRequest;
use Illuminate\Support\Facades\Validator;

class PayController extends Controller
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
     * @param  \App\Http\Requests\StorePayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayRequest $request)
    {
        $validatorpay =Validator::make($request->all(),[
            'alt_img' => 'require',
            'url_img' =>'require', 
            'type_img' =>'require',
        ]);

        if ($validatorpay->fails()) {
            return redirect(url()->previous())
                ->withErrors($validatorpay)
                ->withInput();
        } else {

            $elements = Pay::create([
                'nome_pay' => $request->pays,
                'code_zip_pay' => $request->ville,
            ]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function show(Pay $pay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay $pay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayRequest  $request
     * @param  \App\Models\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayRequest $request, Pay $pay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay $pay)
    {
        //
    }
}
