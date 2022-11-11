<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreViewerRequest;
use App\Http\Requests\UpdateViewerRequest;
use App\Models\Viewer;

class ViewerController extends Controller
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
     * @param  \App\Http\Requests\StoreViewerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreViewerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Viewer  $viewer
     * @return \Illuminate\Http\Response
     */
    public function show(Viewer $viewer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Viewer  $viewer
     * @return \Illuminate\Http\Response
     */
    public function edit(Viewer $viewer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateViewerRequest  $request
     * @param  \App\Models\Viewer  $viewer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateViewerRequest $request, Viewer $viewer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Viewer  $viewer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viewer $viewer)
    {
        //
    }
}
