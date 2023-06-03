<?php

namespace App\Http\Controllers;

use App\Models\blog_single;
use App\Http\Requests\Storeblog_singleRequest;
use App\Http\Requests\Updateblog_singleRequest;
use Illuminate\Support\Str;

class BlogSingleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('webContent.blog');
    }

    public function index_single()
    {
        return view('webContent.blog_single');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.pages.blog_section_admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeblog_singleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeblog_singleRequest $request)
    {
       $request->validated();



    //background image

    //background image file name
    $Blog_thumbnail_name = time() . Str::upper(Str::random(16)) . '.' . $request->Blog_thumbnail->extension();
    // move the background image
    $request->Blog_thumbnail->move(public_path('Blog_thumbnail_image'), $Blog_thumbnail_name);




    //background image

    //background image file name
    $Blog_author_image_name = time() . Str::upper(Str::random(16)) . '.' . $request->Blog_author_image->extension();
    // move the background image
    $request->Blog_author_image->move(public_path('Blog_author_image'), $Blog_author_image_name);




    //background image

    //background image file name
    $Blog_image_name = time() . Str::upper(Str::random(16)) . '.' . $request->Blog_image->extension();
    // move the background image
    $request->Blog_image->move(public_path('Blog_image'), $Blog_image_name);




      $data = [

        'Blog_thumbnail'=>$Blog_thumbnail_name,

        'Blog_titles'=>$request->Blog_titles,
        'Blog_descrioption'=>$request->Blog_descrioption,
        'Blog_highlight_description'=>$request->Blog_highlight_description,

        'Blog_image'=>$Blog_image_name,

        'Blog_image_description'=>$request->Blog_image_description,

        'Blog_date'=>$request->Blog_date,
        'Blog_categories'=>$request->Blog_categories,

        'Blog_author_image'=>$Blog_author_image_name,

        'Blog_author_name'=>$request->Blog_author_name,
        'Blog_author_description'=>$request->Blog_author_description



      ];


      blog_single::create($data);

      return redirect()->back()->with('session' , 'blog data save successfully');

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
