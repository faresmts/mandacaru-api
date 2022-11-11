<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHolderRequest;
use App\Http\Requests\UpdateHolderRequest;
use App\Models\Holder;

class HolderController extends Controller
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
     * @param  \App\Http\Requests\StoreHolderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHolderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Holder  $holder
     * @return \Illuminate\Http\Response
     */
    public function show(Holder $holder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Holder  $holder
     * @return \Illuminate\Http\Response
     */
    public function edit(Holder $holder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHolderRequest  $request
     * @param  \App\Models\Holder  $holder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHolderRequest $request, Holder $holder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Holder  $holder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holder $holder)
    {
        //
    }
}
