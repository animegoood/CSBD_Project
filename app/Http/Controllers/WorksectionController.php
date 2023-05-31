<?php

namespace App\Http\Controllers;

use App\Models\worksection;
use App\Http\Requests\StoreworksectionRequest;
use App\Http\Requests\UpdateworksectionRequest;

class WorksectionController extends Controller
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
     * @param  \App\Http\Requests\StoreworksectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreworksectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\worksection  $worksection
     * @return \Illuminate\Http\Response
     */
    public function show(worksection $worksection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\worksection  $worksection
     * @return \Illuminate\Http\Response
     */
    public function edit(worksection $worksection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateworksectionRequest  $request
     * @param  \App\Models\worksection  $worksection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateworksectionRequest $request, worksection $worksection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\worksection  $worksection
     * @return \Illuminate\Http\Response
     */
    public function destroy(worksection $worksection)
    {
        //
    }
}
