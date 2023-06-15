<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\about;
use App\Http\Requests\StorecontactRequest;
use App\Mail\contactMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $contact_details = about::first();

    return view('webContent.contact', compact('contact_details'));
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StorecontactRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StorecontactRequest $request)
  {
    $request->validated();


    $data = [




      'send_message_name' => $request->send_message_name,

      'send_message_email'=> $request->send_message_email,

      'send_message_subject'=> $request->send_message_subject,
      

      'send_message_message'=> $request->send_message_message,




    ];


    Mail::to('imtiazahmed6265@gmail.com')->send(new contactMail($data));

    return redirect()->back()->with('success', 'contact mail sent successfully');
  }


}
