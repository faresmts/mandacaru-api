<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectOwnerRequest;
use App\Http\Requests\UpdateProjectOwnerRequest;
use App\Models\ProjectOwner;

class ProjectOwnerController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectOwnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectOwnerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectOwner  $projectOwner
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectOwner $projectOwner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectOwner  $projectOwner
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectOwner $projectOwner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectOwnerRequest  $request
     * @param  \App\Models\ProjectOwner  $projectOwner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectOwnerRequest $request, ProjectOwner $projectOwner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectOwner  $projectOwner
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectOwner $projectOwner)
    {
        //
    }
}
