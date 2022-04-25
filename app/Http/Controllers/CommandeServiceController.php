<?php

namespace App\Http\Controllers;

use App\Models\CommandeService;
use App\Http\Requests\StoreCommandeServiceRequest;
use App\Http\Requests\UpdateCommandeServiceRequest;

class CommandeServiceController extends Controller
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
     * @param  \App\Http\Requests\StoreCommandeServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommandeServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommandeService  $commandeService
     * @return \Illuminate\Http\Response
     */
    public function show(CommandeService $commandeService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommandeService  $commandeService
     * @return \Illuminate\Http\Response
     */
    public function edit(CommandeService $commandeService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommandeServiceRequest  $request
     * @param  \App\Models\CommandeService  $commandeService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommandeServiceRequest $request, CommandeService $commandeService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommandeService  $commandeService
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommandeService $commandeService)
    {
        //
    }
}
