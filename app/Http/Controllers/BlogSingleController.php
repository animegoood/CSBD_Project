<?php

namespace App\Http\Controllers;

use App\Models\blog_single;
use App\Http\Requests\Storeblog_singleRequest;
use App\Http\Requests\Updateblog_singleRequest;

class BlogSingleController extends Controller
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
     * @param  \App\Http\Requests\Storeblog_singleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeblog_singleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog_single  $blog_single
     * @return \Illuminate\Http\Response
     */
    public function show(blog_single $blog_single)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog_single  $blog_single
     * @return \Illuminate\Http\Response
     */
    public function edit(blog_single $blog_single)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateblog_singleRequest  $request
     * @param  \App\Models\blog_single  $blog_single
     * @return \Illuminate\Http\Response
     */
    public function update(Updateblog_singleRequest $request, blog_single $blog_single)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog_single  $blog_single
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog_single $blog_single)
    {
        //
    }
}
