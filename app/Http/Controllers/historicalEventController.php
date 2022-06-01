<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHistoricalEventRequest;
use App\Http\Requests\UpdateHistoricalEventRequest;
use App\Models\historicalEvent;

class historicalEventController extends Controller
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
     * @param  \App\Http\Requests\StoreHistoricalEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoricalEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\historicalEvent  $historicalEvent
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historicalEvent  $historicalEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistoricalEventRequest  $request
     *      * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistoricalEventRequest $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
    }
}
