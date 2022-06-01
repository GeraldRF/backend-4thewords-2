<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHistoricalEventRequest;
use App\Http\Requests\UpdateHistoricalEventRequest;
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
     * @param  \App\Http\Requests\StoreHistoricalEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoricalEventRequest $request)
    {
        $validated = $request->validate();
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
     * @param  \App\Http\Requests\UpdateHistoricalEventRequest  $request
     *      * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistoricalEventRequest $request, $id)
    {
        $validated = $request->validate();
        $historicalEvent = historicalEvent::find($id);
        $historicalEvent->update($validated);
        return new historicalEventResource($historicalEvent);
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
