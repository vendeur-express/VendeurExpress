<?php

namespace App\Http\Controllers;

use App\Models\DroitUser;
use App\Http\Requests\StoreDroitUserRequest;
use App\Http\Requests\UpdateDroitUserRequest;

class DroitUserController extends Controller
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
     * @param  \App\Http\Requests\StoreDroitUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDroitUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DroitUser  $droitUser
     * @return \Illuminate\Http\Response
     */
    public function show(DroitUser $droitUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DroitUser  $droitUser
     * @return \Illuminate\Http\Response
     */
    public function edit(DroitUser $droitUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDroitUserRequest  $request
     * @param  \App\Models\DroitUser  $droitUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDroitUserRequest $request, DroitUser $droitUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DroitUser  $droitUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(DroitUser $droitUser)
    {
        //
    }
}
