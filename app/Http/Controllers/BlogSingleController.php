<?php

namespace App\Http\Controllers;

use App\Models\blog_single;
use App\Http\Requests\Storeblog_singleRequest;
use App\Http\Requests\Updateblog_singleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\CursorPaginator;

class BlogSingleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

      $blogs = DB::table('blog_singles')->paginate(15);

      return view('webContent.blog',compact('blogs'));


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
    public function admin()
    {
      if (!Auth::check()) {

        return redirect()->route('login')->with('error', 'You\'re not authenticated!');
      }

      return view('content.pages.blog_section_admin');

    }

    public function create()
    {
      if (!Auth::check()) {

        return redirect()->route('login')->with('error', 'You\'re not authenticated!');
      }

        return view('content.pages.admin_blog.blog_section_admin');
    }
    public function list()
    {
      if (!Auth::check()) {

        return redirect()->route('login')->with('error', 'You\'re not authenticated!');
      }

      $blogs_lists = DB::table('blog_singles')->paginate(15);

      return view('content.pages.admin_blog.blog_section_list',compact('blogs_lists'));

    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeblog_singleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeblog_singleRequest $request)
    {

      if (!Auth::check()) {

        return redirect()->route('login')->with('error', 'You\'re not authenticated!');
      }

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

      return redirect()->route('blog_section_admin')->with('success' , 'blog data save successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog_single  $blog_single
     * @return \Illuminate\Http\Response
     */
    public function show(blog_single $blog_single,$id)
    {
        $blog_details = blog_single::findOrFail($id);


      return view('webContent.blog_single',compact('blog_details'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog_single  $blog_single
     * @return \Illuminate\Http\Response
     */
    public function edit(blog_single $blog_single,$id)
    {

      if (!Auth::check()) {

        return redirect()->route('login')->with('error', 'You\'re not authenticated!');
      }

        $blog_details = blog_single::findOrFail($id);

        return view('content.pages.admin_blog.blog_section_edit',compact('blog_details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateblog_singleRequest  $request
     * @param  \App\Models\blog_single  $blog_single
     * @return \Illuminate\Http\Response
     */
    public function update(Updateblog_singleRequest $request, blog_single $blog_single,$id)
    {



      if (!Auth::check()) {

        return redirect()->route('login')->with('error', 'You\'re not authenticated!');
      }




       $request->validated();


    //for old image delete

    $get_data = blog_single::findOrFail($id);
    $image_name = $get_data->Blog_thumbnail;
    $image2_name = $get_data->Blog_image;
    $image3_name = $get_data->Blog_author_image;





    if ($request->hasFile('Blog_thumbnail')) {

      if (File::exists(public_path('Blog_thumbnail_image/') . $image_name)) {


        File::delete(public_path('Blog_thumbnail_image/') . $image_name);
      }

      //background image

      //background image file name


      $Blog_thumbnail_name = time() . Str::upper(Str::random(16)) . '.' . $request->Blog_thumbnail->extension();
      // move the background image
      $request->Blog_thumbnail->move(public_path('Blog_thumbnail_image'), $Blog_thumbnail_name);
    } else {
      $Blog_thumbnail_name = $get_data->Blog_thumbnail;
    }



    if ($request->hasFile('Blog_image')) {

      if (File::exists(public_path('Blog_image/') . $image2_name)) {
        File::delete(public_path('Blog_image/') . $image2_name);
      }




      //authorbackground image

      //authorbackground image file name
      $Blog_image_name = time() . Str::upper(Str::random(16)) . '.' . $request->Blog_image->extension();
      // move the authorbackground image
      $request->Blog_image->move(public_path('Blog_image'), $Blog_image_name);
    } else {
      $Blog_image_name = $get_data->Blog_image;
    }


    if ($request->hasFile('Blog_author_image')) {

      if (File::exists(public_path('Blog_author_image/') . $image3_name)) {
        File::delete(public_path('Blog_author_image/') . $image3_name);
      }




      //authorbackground image

      //authorbackground image file name
      $Blog_author_image_name = time() . Str::upper(Str::random(16)) . '.' . $request->Blog_author_image->extension();
      // move the authorbackground image
      $request->Blog_author_image->move(public_path('Blog_author_image'), $Blog_author_image_name);
    } else {
      $Blog_author_image_name = $get_data->Blog_author_image;
    }






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


         blog_single::findOrFail($id)->update($data);

         return redirect()->route('blog_section_admin')->with('success' , 'blog data save successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog_single  $blog_single
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog_single $blog_single, $id)
    {

    if (Auth::check()) {
      if (blog_single::findOr($id)->exists()) {


        // remove file from storage
        $table_data = blog_single::findOr($id);
        $image_name = $table_data->Blog_thumbnail;
        $image2_name = $table_data->Blog_image;
        $image3_name = $table_data->Blog_author_image;


        if (File::exists(public_path('Blog_thumbnail_image/') . $image_name)) {
          File::delete(public_path('Blog_thumbnail_image/') . $image_name);

          if (File::exists(public_path('Blog_image/') . $image2_name)) {
            File::delete(public_path('Blog_image/') . $image2_name);
            if (File::exists(public_path('Blog_author_image/') . $image3_name)) {
              File::delete(public_path('Blog_author_image/') . $image3_name);
            }
          }
        } else {
          return redirect()->route('blog_section_admin')->with('error', 'Images are not found associated with this table_data!');
        }
        blog_single::findOr($id)->delete();

        return redirect()->route('blog_section_admin')->with('success', 'Table data deleted successfully!');
      } else {
        return redirect()->route('blog_section_admin')->with('error', 'Table data does not exist! So can not delete!');
      }
    } else {
      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }
    }
}
