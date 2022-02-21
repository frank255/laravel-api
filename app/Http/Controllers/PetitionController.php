<?php

namespace App\Http\Controllers;

use App\Http\Resources\PetitionCollection;
use App\Http\Resources\PetitionResource;
use App\Models\Petition;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        return response()->json( new PetitionCollection(Petition::all()),
            Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return PetitionResource
     */
    public function store(Request $request)
    {
        $petition = Petition::create($request->only([
            'title','description','category','author','signees'
        ]));

        return  new PetitionResource($petition);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\petition  $petition
     * @return PetitionResource
     */
    public function show(petition $petition)
    {
       return new PetitionResource($petition);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\petition  $petition
     * @return PetitionResource
     */
    public function update(Request $request, petition $petition)
    {
        $petition->update($request->only([
            'title','description','category','author','signees'
        ]));

        return  new PetitionResource($petition);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\petition  $petition
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(petition $petition)
    {
        $petition->delete();

        return  response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
