<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Http\Requests\StorecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;
use Illuminate\Support\Facades\DB;
use App\Models\blog_single;
use Illuminate\Support\Facades\Auth;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $category_details = DB::table('categories')->get();
      return view('webContent.categoris_list',compact('category_details'));
    }


    public function admin()
    {
      return view('content.pages.category_section_admin');
    }
    public function list()
    {

      $category_details = DB::table('categories')->paginate(5);
      $postsBYcategory = blog_single::where('Blog_categories')->get();
      return view('content.pages.admin_category.admin_list_category',compact('category_details','postsBYcategory'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('content.pages.admin_category.admin_create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoriesRequest $request)
    {
        $request->validated();


        $data=[

          'category_name'=>$request->category_name



        ];

        categories::create($data);

        return redirect()->route('admin_category')->with('success' , 'Category data save successfully');




    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(categories $categories,$id)
    {
      $category_data = categories::findOrFail($id);

      return view('content.pages.admin_category.admin_edit_category',compact('category_data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoriesRequest  $request
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoriesRequest $request, categories $categories,$id)
    {
      $request->validated();


      $data=[

        'category_name'=>$request->category_name



      ];

      categories::findOrFail($id)->update($data);

      return redirect()->route('admin_category_list')->with('success' , 'Category data update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(categories $categories,$id)
    {
      if (Auth::check()) {
        if (categories::findOrFail($id)->exists()) {


          categories::findOrFail($id)->delete();



          return redirect()->route('admin_category_list')->with('success', 'Table data deleted successfully!');


        } else {
          return redirect()->route('admin_category')->with('error', 'Table data does not exist! So can not delete!');
        }
      } else {
        return redirect()->route('login')->with('error', 'You\'re not authenticated!');
      }
    }
}
