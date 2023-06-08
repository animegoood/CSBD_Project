<?php

namespace App\Http\Controllers;

use App\Models\admin_profile;
use App\Http\Requests\Storeadmin_profileRequest;
use App\Http\Requests\Updateadmin_profileRequest;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.admin_profile.admin_profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function admin()
    {
      return view('content.admin_profile.profile_admin');
    }
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeadmin_profileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeadmin_profileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin_profile  $admin_profile
     * @return \Illuminate\Http\Response
     */
    public function show(admin_profile $admin_profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin_profile  $admin_profile
     * @return \Illuminate\Http\Response
     */
    public function edit(admin_profile $admin_profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateadmin_profileRequest  $request
     * @param  \App\Models\admin_profile  $admin_profile
     * @return \Illuminate\Http\Response
     */
    public function update(Updateadmin_profileRequest $request, admin_profile $admin_profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin_profile  $admin_profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin_profile $admin_profile)
    {
        //
    }
}
