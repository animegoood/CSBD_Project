<?php

namespace App\Http\Controllers;

use App\Models\blog_single;
use App\Http\Requests\Storeblog_singleRequest;
use App\Http\Requests\Updateblog_singleRequest;
use Illuminate\Support\Str;





class BlogSingleController extends Controller
{



  // blog page view
  public function blog()
  {

    $blog_single_details = blog_single::all();

    //check blog image have or not

    if (file_exists(public_path('Blog_image/' . $blog_single_details->blog_image))) {
      $blogImgUrl = asset('Blog_image/' . $blog_single_details->blog_image);
    }


    //check author blog image have or not

    if (file_exists(public_path('Blog_author_image/' . $blog_single_details->author_image))) {
      $authorBlogImgUrl = asset('Blog_image/' . $blog_single_details->author_image);
    }


    return view('webContent.blog' ,   compact('blog_single_details', 'blogImgUrl', 'authorBlogImgUrl'));
  }




  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
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

    return view('content.pages.blog_single_admin');
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


    //generate blog image name

    $blogImg_name = time() . Str::upper(Str::Random(16)) . '.' . $request->blog_image->extension();

    //move blog image

    $request->blog_image->move(public_path('Blog_image'), $blogImg_name);


    //generate author image name
    $authorImg_name = time() . Str::upper(Str::random(16)) . '.' . $request->author_image->extension();

    //move author image
    $request->author_image->move(public_path('Blog_author_image'), $authorImg_name);



    $data = [
      'blog_image' => $blogImg_name,

      'author_image' => $authorImg_name,

      'main_content' => $request->main_content,

      'content_imp_highlight' => $request->content_imp_highlight,

      'rest_main_content' => $request->rest_main_content,

      'blog_post_date' => $request->blog_post_date,

      'categories' => $request->categories,


      'author_name' => $request->author_name,

      'author_description' => $request->author_description,



    ];

    blog_single::created($data);

    return redirect()->back()->with('session', 'blog single data save successfully!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\blog_single  $blog_single
   * @return \Illuminate\Http\Response
   */
  public function show(blog_single $blog_single, $id)
  {
    $blog_single_details = blog_single::findOrfail($id);

    //check blog image have or not

    if (file_exists(public_path('Blog_image/' . $blog_single_details->blog_image))) {
      $blogImgUrl = asset('Blog_image/' . $blog_single_details->blog_image);
    }


    //check author blog image have or not

    if (file_exists(public_path('Blog_author_image/' . $blog_single_details->author_image))) {
      $authorBlogImgUrl = asset('Blog_image/' . $blog_single_details->author_image);
    }


    return view('webContent.blog_single', compact('blog_single_details', 'blogImgUrl', 'authorBlogImgUrl'));
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
