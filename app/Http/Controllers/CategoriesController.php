<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Http\Requests\StorecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;
use Illuminate\Support\Facades\DB;


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

      return view('content.pages.admin_category.admin_list_category');


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
     * Display the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(categories $categories)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoriesRequest  $request
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoriesRequest $request, categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(categories $categories)
    {
        //
    }
}
