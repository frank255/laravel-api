<?php

namespace App\Http\Controllers;

use App\Http\Resources\PetitionCollection;
use App\Http\Resources\PetitionResource;
use App\Models\Petition;
use Illuminate\Http\Request;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return PetitionCollection
     */
    public function index()
    {

        return new PetitionCollection(Petition::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function show(petition $petition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, petition $petition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function destroy(petition $petition)
    {
        //
    }
}
