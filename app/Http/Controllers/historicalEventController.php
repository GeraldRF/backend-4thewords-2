<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\historicalEventResource;
use App\Models\historicalEvent;
use Illuminate\Http\Response;

class historicalEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historicalEvent = historicalEvent::all();
        return new historicalEventResource($historicalEvent);
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'img_url' => 'required',
            'name' => 'required|max:100',
            'description' => 'required|max:150',
            'date' => 'required',
            'popularity' => 'required',
            'country' => 'required|max:60',
            'coordinates' => 'required',
        ]);
        $historicalEvent = historicalEvent::create($validated);
        return new historicalEventResource($historicalEvent);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\historicalEvent  $historicalEvent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historicalEvent = historicalEvent::find($id);
        return new historicalEventResource($historicalEvent);
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     *      * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'img_url' => 'required',
            'name' => 'required|max:100',
            'description' => 'required|max:150',
            'date' => 'required',
            'popularity' => 'required',
            'country' => 'required|max:60',
            'coordinates' => 'required',
        ]);
        $historicalEvent = historicalEvent::find($id);
        $historicalEvent->update($validated);
        return new historicalEventResource($historicalEvent);
    }

    public function giveLike($id){
       
        $historicalEvent = historicalEvent::find($id);
        $historicalEvent->popularity++;
        $historicalEvent->update([$historicalEvent->popularity]);
       
        return response($historicalEvent->popularity, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historicalEvent = historicalEvent::find($id);
        $historicalEvent->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
